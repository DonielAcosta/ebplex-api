<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use OpenApi\Annotations as OA;
use App\Models\OwnerClient;
use App\Models\User;
use App\Models\Subscriptions;
use App\Models\PlansLevelTwo;
use App\Models\Client;
use App\Models\InstallationStatus;
use Validator;

class OwnerClientController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/ownerclient",
     *      tags={"Owner Client"},
     *      summary="Get list of Owner Client",
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
        $owner_clients = OwnerClient::with(['Subscriptions','User','PlansLevelTwo','Service','Client','InstallationStatus'])
        	->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                       $q->where("identification", 'ILIKE', "%" . $search . "%")
                       	->orWhere("name", "ILIKE", "%" . $search . "%")
                       	->orWhere("phone", "ILIKE", "%" . $search . "%")
                       	->orWhere("email", "ILIKE", "%" . $search . "%")
                       	->orWhere("description", "ILIKE", "%" . $search . "%");
                });
            })
            ->orderBy($by, $dir)
            ->orderBy('id', 'desc')
            ->paginate($paginate);

        return response()->json(
            [
                'listed' => True,
                'data' => $owner_clients,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/ownerclient",
     *      tags={"Owner Client"},
     *      summary="Store new Owner Client",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials", 
     *          @OA\JsonContent(
     *            required={"identification","name","phone","email","description"},
     *            @OA\Property(property="identification", type="string"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="phone", type="string"),
     *            @OA\Property(property="email", type="string"),
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
                // 'users_id' => 'required|numeric',
                // 'subscriptions_id' => 'required|numeric',
                'identification' => 'required|string|max:12',
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:15',
                'email' => 'required|string|email|max:255|unique:owner_clients',
                'description' => 'required|string|max:255',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            // 'users_id' => $request->get('users_id'),
            // 'subscriptions_id' => $request->get('subscriptions_id'),
            'identification' => $request->input('identification'),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'description' => $request->input('description')
        ];
        $owner_clients = OwnerClient::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $owner_clients,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Get(
     *      path="/api/ownerclient/{id}",
     *      tags={"Owner Client"},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Owner Client",
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
        $owner_clients = OwnerClient::with(['Subscriptions','User','PlansLevelTwo','Service','Client','InstallationStatus'])->find($id);
        if (!$owner_clients) {
            return response()->json(['error' => 'owner_clients_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $owner_clients,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Put(
     *      path="/api/ownerclient/{id}",
     *      operationId="profileUpdate",
     *      tags={"Owner Client"},
     *      summary="Update existing",
     *      description="Returns updated Owner Client",
     *      @OA\Parameter(
     *          name="id",
     *          description="Owner Client",
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
     *            required={"identification","name","phone","email","description"},
     *            @OA\Property(property="identification", type="string"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="phone", type="string"),
     *            @OA\Property(property="email", type="string"),
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
                // 'users_id' => 'required|numeric',
                // 'subscriptions_id' => 'required|numeric',
                'identification' => 'required|string|max:12',
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:15',
                'email' => 'required|string|email|max:255|unique:owner_clients',
                'description' => 'required|string|max:255',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $owner_clients = OwnerClient::findOrFail($id);
        $owner_clients->fill($request->all());
        $owner_clients->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $owner_clients,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Delete(
     *      path="/api/ownerclient/{id}",
     *      operationId="Delete",
     *      tags={"Owner Client"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" Owner Client  ",
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
        $owner_clients = OwnerClient::findorFail($id);
        $owner_clients->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
