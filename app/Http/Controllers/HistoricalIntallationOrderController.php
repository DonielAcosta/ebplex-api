<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoricalIntallationOrder;
use App\Models\InstallationOrders;
use App\Models\InstallationStatus;
use App\Models\User;
use Validator;
use OpenApi\Annotations as OA;

class HistoricalIntallationOrderController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/historical_intallation_order",
     *      tags={"Historical Intallation Order"},
     *      summary="Get list of Historical Intallation Order",
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
        $by = 'date'; // Order query by X column
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
        $historical_intallation_order = HistoricalIntallationOrder::with(['InstallationStatus','InstallationOrders','User'])
        	->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                       $q->where("date", 'IILIKE', "%" . $search . "%")
                       ->orWhere("description", "ILIKE", "%" . $search . "%");
                });
            })
            ->orderBy($by, $dir)
            ->orderBy('id', 'desc')
            ->paginate($paginate);

        return response()->json(
            [
                'listed' => True,
                'data' => $historical_intallation_order,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/historical_intallation_order",
     *      tags={"Historical Intallation Order"},
     *      summary="Store new Historical Intallation Order",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials",
     *          @OA\JsonContent(
     *            required={"installation_orders_id","installation_statuses_id","date","description","users_id"},
     *            @OA\Property(property="installation_orders_id", type="numeric"),
     *            @OA\Property(property="installation_statuses_id", type="numeric"),
     *            @OA\Property(property="users_id", type="numeric"),
     *            @OA\Property(property="date", type="date"),
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
                'installation_orders_id' => 'required|numeric',
                'installation_statuses_id' => 'required|numeric',
                'users_id' => 'required|numeric',
                'date' => 'required|date',
                'description' => 'required|string|max:255'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'installation_orders_id' => $request->get('installation_orders_id'),
            'installation_statuses_id' => $request->get('installation_statuses_id'),
            'users_id' => $request->get('users_id'),
            'date' => $request->input('date'),
            'description' => $request->input('description'),
        ];
        $historical_intallation_order = HistoricalIntallationOrder::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $historical_intallation_order,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

      /**
     * @OA\Get(
     *      path="/api/historical_intallation_order/{id}",
     *      tags={"Historical Intallation Order"},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Historical Intallation Order",
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
        $historical_intallation_order = HistoricalIntallationOrder::with(['InstallationStatus','InstallationOrders','User'])->find($id);
        if (!$historical_intallation_order) {
            return response()->json(['error' => 'historical_intallation_order_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $historical_intallation_order,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

   /**
     * @OA\Put(
     *      path="/api/historical_intallation_order/{id}",
     *      operationId="profileUpdate",
     *      tags={"Historical Intallation Order"},
     *      summary="Update existing",
     *      description="Returns updated Historical Intallation Order",
     *      @OA\Parameter(
     *          name="id",
     *          description="Historical Intallation Order",
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
     *            required={"installation_orders_id","installation_statuses_id","date","description","users_id"},
     *            @OA\Property(property="installation_orders_id", type="numeric"),
     *            @OA\Property(property="installation_statuses_id", type="numeric"),
     *            @OA\Property(property="users_id", type="numeric"),
     *            @OA\Property(property="date", type="date"),
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
                'installation_orders_id' => 'required|numeric',
                'installation_statuses_id' => 'required|numeric',
                'users_id' => 'required|numeric',
                'date' => 'required|date',
                'description' => 'required|string|max:255',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $historical_intallation_order = HistoricalIntallationOrder::findOrFail($id);
        $historical_intallation_order->fill($request->all());
        $historical_intallation_order->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $historical_intallation_order,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Delete(
     *      path="/api/historical_intallation_order/{id}",
     *      operationId="Delete",
     *      tags={"Historical Intallation Order"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Historical Intallation Order",
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
        $historical_intallation_order = HistoricalIntallationOrder::findorFail($id);
        $historical_intallation_order->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
