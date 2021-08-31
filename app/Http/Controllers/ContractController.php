<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use Swagger\Annotations as SWG;
use App\Models\InstallationOrders;
use App\Models\Contract;
use App\Models\Packages;
use App\Models\Client;
use App\Models\OwnerClient;
use Validator;

class ContractController extends Controller
{
  
    /**
     * @OA\Get(
     *      path="/api/contract",
     *      tags={"Contract"},
     *      summary="Get list of contract",
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
        $owner = $request->input('owner_clients_id');
        $paginate = request()->get('paginate');
        if ($paginate == null) {
            $paginate = 10;
        }
        $search = request()->get('search');
        $by = 'n_contract'; // Order query by X column
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

        $contracts = Contract::with([
          'Packages.PlansLevelTwo',
          'Client.OwnerClient',
          'InstallationOrders.Technical.UserData'
          ])
          ->whereHas('Client',function($q) use ($owner) {
            return $q->where('owner_clients_id', $owner);
          })
          ->when($search, function ($query, $search) {
            return $query->where(function ($q) use ($search) {
                    $q->where("n_contract", 'ILIKE', "%" . $search . "%")
                      ->orWhere("clients_id", "ILIKE", "%" . $search . "%");
            });
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
                'data' => $contracts,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/contract",
     *      tags={"Contract"},
     *      summary="Store new contract",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials",
     *          @OA\JsonContent(
     *            required={"clients_id","n_contract","date"},
     *            @OA\Property(property="clients_id", type="numeric"),
     *            @OA\Property(property="n_contract", type="numeric"),
     *            @OA\Property(property="date", type="date"),
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
     *      @OA\Property(property="message", type="string", example="Element obtained successfully")
     *        )
     *      )
     * )
     */

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'clients_id' => 'required|numeric',
                'n_contract' => 'required|string|max:255',
                'date' => 'required|date'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'clients_id' => $request->get('clients_id'),
            'n_contract' => $request->input('n_contract'),
            'date' => $request->input('date')
        ];
        $contract = Contract::create($arr);
        $packages = Packages::create([
          'plans_level_twos_id' => $request->input('package'),
          'services_id' => null,
          'contracts_id' => $contract->id,
          'price' => $request->input('price'),
          'qty' => $request->input('qty')
        ]);
        return response()->json(
            [
                'created' => true,
                'data' => $contract,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

   /**
     * @OA\Get(
     *      path="/api/contract/{id}",
     *      tags={"Contract"},
     *      summary="Get information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="contract id",
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
     *      @OA\Property(property="message", type="string", example="successful operation")
     *        )
     *      ),
     * )
     */

    public function show($id)
    {
        $contract = Contract::with(['Packages','Client','InstallationOrders'])->find($id);
        if (!$contract) {
            return response()->json(['error' => 'contract_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $contract,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Put(
     *      path="/api/contract/{id}",
     *      operationId="profileUpdate",
     *      tags={"Contract"},
     *      summary="Update existing",
     *      description="Returns updated contract",
     *      @OA\Parameter(
     *          name="id",
     *          description="Project id",
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
     *            required={"clients_id","n_contract","date"},
     *            @OA\Property(property="clients_id", type="numeric"),
     *            @OA\Property(property="n_contract", type="numeric"),
     *            @OA\Property(property="date", type="date"),
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
                'clients_id' => 'required|numeric',
                'n_contract' => 'required|string|max:255',
                'date' => 'required|date'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $contract = Contract::findOrFail($id);
        $contract->fill($request->all());
        $contract->save();
        $package = Packages::where('contracts_id', $contract->id)->first();
        if($package == null) {
          Packages::create([
            'plans_level_twos_id' => $request->input('package'),
            'services_id' => null,
            'contracts_id' => $contract->id,
            'price' => $request->input('price'),
            'qty' => $request->input('qty')
          ]);
        }
        else {
          $package->plans_level_twos_id = $request->input('package');
          $package->price = $request->input('price');
          $package->qty = $request->input('qty');
          $package->save();
        }
        return response()->json(
            [
                'updated' => True,
                'data' => $contract,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        ); 
    }

     /**
     * @OA\Delete(
     *      path="/api/contract/{id}",
     *      operationId="Delete",
     *      tags={"Contract"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="contract id",
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
        $contract = Contract::findorFail($id);
        $contract->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
