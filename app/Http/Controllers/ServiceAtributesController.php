<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\Service;
use App\Models\ServiceAtributes;
use Validator;


class ServiceAtributesController extends Controller
{
     /**
     * @OA\Get(
     *      path="/api/service_attributes",
     *      tags={"Service Attributes"},
     *      summary="Get list of Service Attributes",
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
        $service_atributes = ServiceAtributes::with(['Service'])
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
                'data' => $service_atributes,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/service_attributes",
     *      tags={"Service Attributes"},
     *      summary="Store new Service Attributes",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials", 
     *          @OA\JsonContent(
     *            required={"services_id","name","value"},
     *            @OA\Property(property="services_id", type="numeric"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="price", type="string"),
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
                'services_id' => 'required|numeric',
                'name' => 'required|string|max:255',
                'value' => 'required|string|max:255'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'services_id' => $request->get('services_id'),
            'name' => $request->input('name'),
            'value' => $request->input('value')
        ];
        $service_atributes = ServiceAtributes::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $service_atributes,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Get(
     *      path="/api/service_attributes/{id}",
     *      tags={"Service Attributes"},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Service Attributes",
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
        $service_atributes = ServiceAtributes::with(['Service'])->find($id);
        if (!$service_atributes) {
            return response()->json(['error' => 'service_atributes_does_not_exist'], 404);
        }

        return response()->json(
            [
                'showed' => True,
                'data' => $service_atributes,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Put(
     *      path="/api/service_attributes/{id}",
     *      operationId="profileUpdate",
     *      tags={"Service Attributes"},
     *      summary="Update existing",
     *      description="Returns updated Service Attributes",
     *      @OA\Parameter(
     *          name="id",
     *          description="Service Attributes",
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
     *            required={"services_id","name","value"},
     *            @OA\Property(property="services_id", type="numeric"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="price", type="string"),
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
                'services_id' => 'required|numeric',
                'name' => 'required|string|max:255',
                'value' => 'required|string|max:255'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $service_atributes = ServiceAtributes::findOrFail($id);
        $service_atributes->fill($request->all());
        $service_atributes->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $service_atributes,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Delete(
     *      path="/api/service_attributes/{id}",
     *      operationId="Delete",
     *      tags={"Service Attributes"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" Elimina Service Attributes",
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
        $service_atributes = ServiceAtributes::findorFail($id);
        $service_atributes->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
