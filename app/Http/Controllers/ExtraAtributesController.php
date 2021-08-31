<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\InstallationOrders;
use App\Models\ExtraAtributes;
use Validator;

class ExtraAtributesController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/extra_tributes",
     *      tags={"Extra Atributes"},
     *      summary="Get list of Extra Atributes",
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
        $extra_tributes = ExtraAtributes::with(['InstallationOrders'])
            ->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                        $q->where("name", 'ILIKE', "%" . $search . "%")
                        ->orWhere("value", "ILIKE", "%" . $search . "%");
                });
            })
            ->orderBy($by, $dir)
            ->orderBy('id', 'desc')
            ->paginate($paginate);

        return response()->json(
            [
                'listed' => True,
                'data' => $extra_tributes,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/extra_tributes",
     *      tags={"Extra Atributes"},
     *      summary="Store new Extra Atributes",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials",
     *          @OA\JsonContent(
     *            required={"installation_orders_id","name","value"},
     *            @OA\Property(property="installation_orders_id", type="numeric"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="value", type="string"),
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
                'installation_orders_id' => 'required|numeric',
                'name' => 'required|string|max:255',
                'value' => 'required|string|max:255'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'installation_orders_id' => $request->get('installation_orders_id'),
            'name' => $request->input('name'),
            'value' => $request->input('value')
        ];
        $extra_tributes = ExtraAtributes::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $extra_tributes,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Get(
     *      path="/api/extra_tributes/{id}",
     *      tags={"Extra Atributes"},
     *      summary="Get information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Extra Atributes ",
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
        $extra_tributes = ExtraAtributes::with(['InstallationOrders'])->find($id);
        if (!$extra_tributes) {
            return response()->json(['error' => 'extra_atributes_does_not_exist'], 404);
        }

        return response()->json(
            [
                'showed' => True,
                'data' => $extra_tributes,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Put(
     *      path="/api/extra_tributes/{id}",
     *      operationId="profileUpdate",
     *      tags={"Extra Atributes"},
     *      summary="Update existing",
     *      description="Returns updated Extra Atributes",
     *      @OA\Parameter(
     *          name="id",
     *          description="Extra Atributes",
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
     *            required={"installation_orders_id","name","value"},
     *            @OA\Property(property="installation_orders_id", type="numeric"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="value", type="string"),
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
                'installation_orders_id' => 'required|numeric',
                'name' => 'required|string|max:255',
                'value' => 'required|string|max:255'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $extra_tributes = ExtraAtributes::findOrFail($id);
        $extra_tributes->fill($request->all());
        $extra_tributes->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $extra_tributes,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Delete(
     *      path="/api/extra_tributes/{id}",
     *      operationId="Delete",
     *      tags={"Extra Atributes"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Extra Atributes",
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
        $service_atributes = ExtraAtributes::findorFail($id);
        $service_atributes->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
