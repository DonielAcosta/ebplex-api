<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\Contract;
use App\Models\PlansLevelTwo;
use App\Models\Packages;
use App\Models\Service;
use Validator;
 
class PackagesController extends Controller
{
     /**
     * @OA\Get(
     *      path="/api/packages",
     *      tags={"Packages"},
     *      summary="Get list of Packages",
     *      description="Returns list ",
     *      @OA\Response(
     *          response=200,
     *          description="Element obtained successfully",
     *     @OA\JsonContent(
     *      @OA\Property(property="message", type="string", example="successful operation")
     *        )
     *      ),
     *    )
     */

    public function index(Request $request)
    {
        $paginate = request()->get('paginate');
        if ($paginate == null) {
            $paginate = 10;
        }
        $search = request()->get('search');
        $by = 'price'; // Order query by X column
        if (request()->has('orderBy')) {
            $by = request()->get('orderBy');
        }
        $dir = 'desc'; // Direction of the Order by
        if (request()->has('dirDesc')) {
            if (request()->get('dirDesc') === 'true') {
                $dir = 'desc';
            } else {
                $dir = 'asc';
            }
        }
        $packages = Packages::with(['PlansLevelTwo','Service','Contract'])
        	->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                       $q->where("price", 'ILIKE', "%" . $search . "%")
                       	->orWhere("qty", "ILIKE", "%" . $search . "%");
                });
            })
            ->orderBy($by, $dir)
            ->orderBy('id', 'desc')
            ->paginate($paginate);

        return response()->json(
            [
                'listed' => True,
                'data' => $packages,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/packages",
     *      tags={"Packages"},
     *      summary="Store new Packages",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials", 
     *          @OA\JsonContent(
     *            required={"plans_level_twos_id","services_id","contracts_id","price","qty"},
     *            @OA\Property(property="plans_level_twos_id", type="numeric"),
     *            @OA\Property(property="services_id", type="numeric"),
     *            @OA\Property(property="contracts_id", type="numeric"),
     *            @OA\Property(property="price", type="regex:/^\d+(\.\d{1,2})?$/"),
     *            @OA\Property(property="qty", type="numeric"),
     *            ),
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Validation error",
     *      @OA\JsonContent(
     *      @OA\Property(property="message", type="string", example="Sorry, Bad Request, Unprocessable Entity ")
     *        )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Element obtained successfully",
     *     @OA\JsonContent(
     *      @OA\Property(property="message", type="string", example="successful operation")
     *        )
     *      )
     * )
     */

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'plans_level_twos_id' => 'required|numeric',
                'services_id' => 'required|numeric',
                'contracts_id' => 'required|numeric',
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'qty' => 'required|numeric'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'plans_level_twos_id' => $request->get('plans_level_twos_id'),
            'services_id' => $request->get('services_id'),
            'contracts_id' => $request->get('contracts_id'),
            'price' => $request->input('price'),
            'qty' => $request->input('qty')
        ];
        $packages = Packages::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $packages,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Get(
     *      path="/api/packages/{id}",
     *      tags={"Packages"},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Packages",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description=" Resource Not Found",
     *      @OA\JsonContent(
     *      @OA\Property(property="message", type="string", example="Sorry, Resource Not Found")
     *        )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Element obtained successfully",
     *     @OA\JsonContent(
     *      @OA\Property(property="message", type="string", example="Element obtained successfully")
     *        )
     *      ),
     * )
     */

    public function show($id)
    {
        $packages = packages::with(['PlansLevelTwo','Service','Contract'])->find($id);
        if (!$packages) {
            return response()->json(['error' => 'packages_does_not_exist'], 404);
        }

        return response()->json(
            [
                'showed' => True,
                'data' => $packages,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Put(
     *      path="/api/packages/{id}",
     *      operationId="profileUpdate",
     *      tags={"Packages"},
     *      summary="Update existing",
     *      description="Returns updated Packages",
     *      @OA\Parameter(
     *          name="id",
     *          description="Packages",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials",
     *          @OA\JsonContent(
     *            required={"plans_level_twos_id","services_id","contracts_id","price","qty"},
     *            @OA\Property(property="plans_level_twos_id", type="numeric"),
     *            @OA\Property(property="services_id", type="numeric"),
     *            @OA\Property(property="contracts_id", type="numeric"),
     *            @OA\Property(property="price", type="regex:/^\d+(\.\d{1,2})?$/"),
     *            @OA\Property(property="qty", type="numeric"),
     *            ),
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Validation error",
     *      @OA\JsonContent(
     *      @OA\Property(property="message", type="string", example="Sorry, Unprocessable Entity")
     *        )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Element obtained successfully",
     *     @OA\JsonContent(
     *      @OA\Property(property="message", type="string", example="Element obtained successfully")
     *        )
     *      )
     * )
     */

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'plans_level_twos_id' => 'required|numeric',
                'services_id' => 'required|numeric',
                'contracts_id' => 'required|numeric',
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'qty' => 'required|numeric'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $packages = Packages::findOrFail($id);
        $packages->fill($request->all());
        $packages->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $packages,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );

    }

    /**
     * @OA\Delete(
     *      path="/api/packages/{id}",
     *      operationId="Delete",
     *      tags={"Packages"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" Elimina packages ",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Item removed successfully"
     *      ),
     * )
     */
    
    public function destroy($id)
    {
        $packages = Packages::findorFail($id);
        $packages->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
