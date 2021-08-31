<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\OwnerClient;
use App\Models\PlansLevelTwo;
use App\Models\Packages;
use Validator;

class PlansLevelTwoController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/plansleveltwo",
     *      tags={"Plans Level Two"},
     *      summary="Get list of Plans Level Two",
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
        $plans_level_two = PlansLevelTwo::with(['OwnerClient','Packages', 'Services'])
        	->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                       $q->where("name", 'ILIKE', "%" . $search . "%")
                       	->orWhere("price", "ILIKE", "%" . $search . "%");
                });
            })
            ->when($owner_clients_id, function ($query) use ($owner_clients_id) {
              return $query->where("owner_clients_id", $owner_clients_id);
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
                'data' => $plans_level_two,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/plansleveltwo",
     *      tags={"Plans Level Two"},
     *      summary="Store new Plans Level Two",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials", 
     *          @OA\JsonContent(
     *            required={"owner_clients_id","name","price"},
     *            @OA\Property(property="owner_clients_id", type="numeric"),
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
                'owner_clients_id' => 'required|numeric',
                'name' => 'required|string|max:255',
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'owner_clients_id' => $request->get('owner_clients_id'),
            'name' => $request->input('name'),
            'price' => $request->input('price')
        ];
        $plans_level_two = PlansLevelTwo::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $plans_level_two,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Get(
     *      path="/api/plansleveltwo/{id}",
     *      tags={"Plans Level Two"},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Plans Level Two",
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
        $plans_level_two = PlansLevelTwo::with(['OwnerClient','Packages', 'Services'])->find($id);
        if (!$plans_level_two) {
            return response()->json(['error' => 'plans_level_two_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $plans_level_two,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }
    
    /**
     * @OA\Put(
     *      path="/api/plansleveltwo/{id}",
     *      operationId="profileUpdate",
     *      tags={"Plans Level Two"},
     *      summary="Update existing",
     *      description="Returns updated Plans Level Two",
     *      @OA\Parameter(
     *          name="id",
     *          description="Plans Level Two",
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
     *            required={"owner_clients_id","name","price"},
     *            @OA\Property(property="owner_clients_id", type="numeric"),
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
                'owner_clients_id' => 'required|numeric',
                'name' => 'required|string|max:255',
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $plans_level_two = PlansLevelTwo::findOrFail($id);
        $plans_level_two->fill($request->all());
        $plans_level_two->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $plans_level_two,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/add_service_plan",
     *      tags={"Plans Level Two"},
     *      summary="Store new Add Service Plan",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials", 
     *          @OA\JsonContent(
     *            required={"service"},
     *            @OA\Property(property="service", type="numeric"),
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
     *      @OA\Property(property="message", type="string", example=" Element obtained successfully")
     *        )
     *      )
     * )
     */

    public function addServicePlan(Request $request, $id)
    {
      $plans_level_two = PlansLevelTwo::findOrFail($id);
      $plans_level_two->Services()->sync($request->get('service'));
      return response()->json(
        [
            'updated' => True,
            'data' => $plans_level_two,
            'message' => 'Elemento obtenido exitosamente'
        ],
        200
      );
    }
    
    /**
     * @OA\Delete(
     *      path="/api/remove_service_plan/{id}",
     *      operationId="Delete",
     *      tags={"Plans Level Two"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" Remove Service Plan",
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

    public function removeServicePlan(Request $request, $id)
    {
        $validator = Validator::make(
          $request->all(),
          [
            'service' => 'required|numeric',
          ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $plans_level_two = PlansLevelTwo::findOrFail($id);
        $plans_level_two->Services.detach($request->get('service'));
        return response()->json(
          [
              'updated' => True,
              'data' => $plans_level_two,
              'message' => 'Elemento obtenido exitosamente'
          ],
          200
        );
    }

    /**
     * @OA\Delete(
     *      path="/api/plansleveltwo/{id}",
     *      operationId="Delete",
     *      tags={"Plans Level Two"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" Elimina Plans Level Two ",
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
        $plans_level_two = PlansLevelTwo::findorFail($id);
        $plans_level_two->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
