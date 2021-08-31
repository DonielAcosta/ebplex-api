<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\Plans;
use App\Models\Subscriptions;
use Validator;

class PlansController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/plans",
     *      tags={"Plans"},
     *      summary="Get list of Plans",
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
        $by = 'name'; // Order query by X column
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
        $plans = Plans::with(['subscriptions'])
        	->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                       $q->where("name", 'ILIKE', "%" . $search . "%")
                       	->orWhere("price", "ILIKE", "%" . $search . "%");
                });
            })
            ->orderBy($by, $dir)
            ->orderBy('id', 'desc')
            ->paginate($paginate);

        return response()->json(
            [
                'listed' => True,
                'data' => $plans,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/plans",
     *      tags={"Plans"},
     *      summary="Store new Plans",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials", 
     *          @OA\JsonContent(
     *            required={"name","price"},
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="price", type="regex:/^\d+(\.\d{1,2})?$/"),
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
                'name' => 'required|string|max:255',
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'name' => $request->input('name'),
            'price' => $request->input('price')
        ];
        $plans = Plans::create($arr);
        // $type_user = TypeUser::create($request->all());
        return response()->json(
            [
                'created' => true,
                'data' => $plans,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Get(
     *      path="/api/plans/{id}",
     *      tags={"Plans"},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Plans",
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
        $plans = Plans::with(['subscriptions'])->find($id);
        if (!$plans) {
            return response()->json(['error' => 'plans_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $plans,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Put(
     *      path="/api/plans/{id}",
     *      operationId="profileUpdate",
     *      tags={"Plans"},
     *      summary="Update existing",
     *      description="Returns updated Plans",
     *      @OA\Parameter(
     *          name="id",
     *          description="Plans",
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
     *            required={"name","price"},
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="price", type="regex:/^\d+(\.\d{1,2})?$/"),
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
                'name' => 'required|string|max:255',
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $plans = Plans::findOrFail($id);
        $plans->fill($request->all());
        $plans->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $plans,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Delete(
     *      path="/api/plans/{id}",
     *      operationId="Delete",
     *      tags={"Plans"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" Elimina plans ",
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
        $plans = Plans::findorFail($id);
        $plans->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
