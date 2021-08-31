<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\OwnerClient;
use App\Models\InstallationOrders;
use App\Models\InstallationStatus;
use App\Models\HistoricalIntallationOrder;
use Validator;

class InstallationStatusController extends Controller
{
      /**
     * @OA\Get(
     *      path="/api/installationstatus",
     *      tags={"Installation Status"},
     *      summary="Get list of Installation Status",
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
        $by = 'status'; // Order query by X column
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
        $installation_status = InstallationStatus::with(['OwnerClient','HistoricalIntallationOrder','InstallationOrders'])
        	->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                       $q->where("status", 'ILIKE', "%" . $search . "%")
                       ->orWhere("colour", "ILIKE", "%" . $search . "%")
                       ->orWhere("dark", "ILIKE", "%" . $search . "%");;
                });
            })
            ->orderBy($by, $dir)
            ->orderBy('id', 'desc')
            ->paginate($paginate);

        return response()->json(
            [
                'listed' => True,
                'data' => $installation_status,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/installationstatus",
     *      tags={"Installation Status"},
     *      summary="Store new Installation Status",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials",
     *          @OA\JsonContent(
     *            required={"owner_clients_id","status","colour","dark"},
     *            @OA\Property(property="owner_clients_id", type="numeric"),
     *            @OA\Property(property="status", type="string"),
     *            @OA\Property(property="colour", type="string"),
     *            @OA\Property(property="dark", type="boolean"),
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
                'status' => 'required|string|max:255',
                'colour' => 'required|string',
                'dark'=>'required|boolean',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'owner_clients_id' => $request->get('owner_clients_id'),
            'status' => $request->input('status'),
            'colour' => $request->input('colour'),
            'dark' => $request->input('dark')
        ];
        $installation_status = InstallationStatus::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $installation_status,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Get(
     *      path="/api/installationstatus/{id}",
     *      tags={"Installation Status"},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Installation Status",
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
        $installation_status = InstallationStatus::with(['OwnerClient','HistoricalIntallationOrder','InstallationOrders'])->find($id);
        if (!$installation_status) {
            return response()->json(['error' => 'installation_status_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $installation_status,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Put(
     *      path="/api/installationstatus/{id}",
     *      operationId="profileUpdate",
     *      tags={"Installation Status"},
     *      summary="Update existing",
     *      description="Returns updated Installation Status",
     *      @OA\Parameter(
     *          name="id",
     *          description="Installation Status",
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
     *            required={"owner_clients_id","status","colour","dark"},
     *            @OA\Property(property="owner_clients_id", type="numeric"),
     *            @OA\Property(property="status", type="string"),
     *            @OA\Property(property="colour", type="string"),
     *            @OA\Property(property="dark", type="boolean"), 
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
                'status' => 'required|string|max:255',
                'colour' => 'required|string',
                'dark'=>'required|boolean',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $installation_status = InstallationStatus::findOrFail($id);
        $installation_status->fill($request->all());
        $installation_status->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $installation_status,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Delete(
     *      path="/api/installationstatus/{id}",
     *      operationId="Delete",
     *      tags={"Installation Status"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" status de las ordenes de instalacion ",
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
        $installation_status = InstallationStatus::findorFail($id);
        $installation_status->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
