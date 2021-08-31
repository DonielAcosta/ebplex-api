<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\Service;
use App\Models\ServiceAtributes;
use App\Models\OwnerClient;
use App\Models\Packages;
use Validator;

class ServiceController extends Controller
{
     /**
     * @OA\Get(
     *      path="/api/service",
     *      tags={"Service "},
     *      summary="Get list of Service",
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
        $restrict = request()->get('restrict');
        $owner_clients_id = request()->get('owner_clients_id');
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
        $service = Service::with(['OwnerClient','ServiceAtributes','Packages'])
        	->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                       $q->where("name", 'ILIKE', "%" . $search . "%")
                       	->orWhere("price", "ILIKE", "%" . $search . "%")
                       	->orWhere("description", "ILIKE", "%" . $search . "%");
                });
            })
            ->when($owner_clients_id, function ($query) use ($owner_clients_id) {
              return $query->where("owner_clients_id", $owner_clients_id);
            })
            ->when($restrict, function ($query) use ($restrict) {
              return $query->whereNotIn("id", $restrict);
            })
            ->orderBy($by, $dir)
            ->orderBy('id', 'desc')
            ->when($paginate == 'All',
              function ($query){
                return $query->get();
              },
              function ($query, $paginate){
                return $query->paginate($paginate);
              },
            );

        return response()->json(
            [
                'listed' => True,
                'data' => $service,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/service",
     *      tags={"Service "},
     *      summary="Store new Service",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials", 
     *          @OA\JsonContent(
     *            required={"owner_clients_id","name","price","description"},
     *            @OA\Property(property="owner_clients_id", type="numeric"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="price", type="regex:/^\d+(\.\d{1,2})?$/"),
     *            @OA\Property(property="description", type="string"),
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
                'owner_clients_id' => 'required|numeric',
                'name' => 'required|max:255',
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'description' => 'max:255|'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'owner_clients_id' => $request->get('owner_clients_id'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description')
        ];
        $service = Service::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $service,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

   /**
     * @OA\Get(
     *      path="/api/service/{id}",
     *      tags={"Service "},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Service ",
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
        error_log("respuesta");
        $service = Service::with(['OwnerClient','ServiceAtributes','Packages'])->find($id);
        if (!$service) {
            return response()->json(['error' => 'Service_does_not_exist'], 404);
        }

        return response()->json(
            [
                'showed' => True,
                'data' => $service,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Put(
     *      path="/api/service/{id}",
     *      operationId="profileUpdate",
     *      tags={"Service "},
     *      summary="Update existing",
     *      description="Returns updated Service",
     *      @OA\Parameter(
     *          name="id",
     *          description="Service ",
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
     *            required={"owner_clients_id","name","price","description"},
     *            @OA\Property(property="owner_clients_id", type="numeric"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="price", type="regex:/^\d+(\.\d{1,2})?$/"),
     *            @OA\Property(property="description", type="string"),
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
                'owner_clients_id' => 'required|numeric',
                'name' => 'required|max:255',
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'description' => 'max:255'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $service = Service::findOrFail($id);
        $service->fill($request->all());
        $service->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $service,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

   /**
     * @OA\Delete(
     *      path="/api/service/{id}",
     *      operationId="Delete",
     *      tags={"Service "},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" Elimina Service ",
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
        $service = service::findorFail($id);
        $service->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
