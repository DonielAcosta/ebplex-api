<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\InstallationOrders;
use App\Models\InstallationStatus;
use App\Models\HistoricalIntallationOrder;
use App\Models\ExtraAtributes;
use App\Models\Contract;
use Validator;

class InstallationOrdersController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/installation_orders",
     *      tags={"Installation Orders"},
     *      summary="Get list of Installation Orders",
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
        $by = 'description'; // Order query by X column
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
        $installation_orders = InstallationOrders::with([
                'InstallationStatus',
                'HistoricalIntallationOrder',
                'Contract.Client.OwnerClient.User.UserData',
                'ExtraAtributes',
                'Technical.UserData',
            ])
        	->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                       $q->where("description", 'ILIKE', "%" . $search . "%");
                });
            })
            ->orderBy($by, $dir)
            ->orderBy('id', 'desc')
            ->paginate($paginate);

        return response()->json(
            [
                'listed' => True,
                'data' => $installation_orders,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/installation_orders",
     *      tags={"Installation Orders"},
     *      summary="Store new Installation Orders",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials",
     *          @OA\JsonContent(
     *            required={"installation_statuses_id","contracts_id","date_asig","date_ord","date_end","description"},
     *            @OA\Property(property="installation_statuses_id", type="numeric"),
     *            @OA\Property(property="contracts_id", type="numeric"),
     *            @OA\Property(property="date_asig", type="date"),
     *            @OA\Property(property="date_ord", type="date"),
     *            @OA\Property(property="date_end", type="date"),
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
                'installation_statuses_id' => 'required|numeric',
                'contracts_id' => 'required|numeric',
                'date_asig' => 'date',
                'date_ord' => 'required|date',
                'date_end' => 'required|date',
                'description' => 'required|string'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'installation_statuses_id' => $request->get('installation_statuses_id'),
            'contracts_id' => $request->get('contracts_id'),
            'date_asig' => $request->input('date_asig'),
            'date_ord' => $request->input('date_ord'),
            'date_end' => $request->input('date_end'),
            'description' => $request->input('description')
        ];
        $installation_orders = InstallationOrders::create($arr);
        if ($request->has('technical')) {
            $installation_orders->Technical()->detach();
            $installation_orders->Technical()->attach($request->input('technical'), ['manager' => true]);
        }
        return response()->json(
            [
                'created' => true,
                'data' => $installation_orders,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

  /**
     * @OA\Get(
     *      path="/api/installation_orders/{id}",
     *      tags={"Installation Orders"},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Installation Orders",
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
        $installation_orders = InstallationOrders::with(['InstallationStatus','HistoricalIntallationOrder','Contract.Client','ExtraAtributes'])->find($id);
        if (!$installation_orders) {
            return response()->json(['error' => 'installation_orders_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $installation_orders,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

   /**
     * @OA\Put(
     *      path="/api/installation_orders/{id}",
     *      operationId="profileUpdate",
     *      tags={"Installation Orders"},
     *      summary="Update existing",
     *      description="Returns updated Installation Orders",
     *      @OA\Parameter(
     *          name="id",
     *          description="Installation Orders",
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
     *            required={"installation_statuses_id","contracts_id","date_asig","date_ord","date_end","description"},
     *            @OA\Property(property="installation_statuses_id", type="numeric"),
     *            @OA\Property(property="contracts_id", type="numeric"),
     *            @OA\Property(property="date_asig", type="date"),
     *            @OA\Property(property="date_ord", type="date"),
     *            @OA\Property(property="date_end", type="date"),
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
                'installation_statuses_id' =>'required|numeric',
                'contracts_id' => 'required|numeric',
                'date_asig' => 'date',
                'date_ord' => 'required|date',
                'date_end' => 'required|date',
                'description' => 'required|string'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $installation_orders = InstallationOrders::findOrFail($id);
        $installation_orders->fill($request->all());
        $installation_orders->save();
        if ($request->has('technical')) {
            $installation_orders->Technical()->detach();
            $installation_orders->Technical()->attach($request->input('technical'), ['manager' => true]);
        }
        if ($request->has('acceptByTechnical')) {
            $installation_orders->Technical()->detach();
        }
        return response()->json(
            [
                'updated' => True,
                'data' => $installation_orders,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Delete(
     *      path="/api/installation_orders/{id}",
     *      operationId="Delete",
     *      tags={"Installation Orders"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Installation Orders",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="This element cannot be removed, because it has dependent relationships"
     *      ),
     * )
     */
    
    public function destroy($id)
    {
        $installation_orders = InstallationOrders::with(['InstallationStatus','Technical'])->findorFail($id);
        if (count($installation_orders->Technical) > 0 ) {
            return response()->json([
                'deleted' => False,
                'message' => 'Este elemento no se puede eliminar, porque tiene relaciones dependientes',
            ], 400);
        }
        $installation_orders->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }

   /**
     * @OA\Get(
     *      path="/api/get_instalation_technical/{id}",
     *      tags={"Installation Orders"},
     *      summary="information Instalation Technical ",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Installation Orders",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
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

    public function get_instalation_technical(Request $request, $id)    
    {
      $technical = InstallationOrders::whereHas("Technical", function ($q) use ($id) { 
        return $q->where('users_id', $id); 
      })
      ->with(['Technical','InstallationStatus','HistoricalIntallationOrder','Contract.Client','ExtraAtributes'])->get();
      return response()->json([
        'showed' => True,
        'data' => $technical,
        'message' => 'Elemento obtenido exitosamente'
      ], 200);
    }

}
