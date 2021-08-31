<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\Contract;
use App\Models\Direction;
use App\Models\Type;
use App\Models\OwnerClient;
use App\Models\Client;
use Validator;

class ClientController extends Controller
{


     /**
     * @OA\Get(
     *      path="/api/client",
     *      tags={"Client"},
     *      summary="Get list of client",
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
        $by = 'owner_clients_id'; // Order query by X column
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
        $owner_id = request()->get('owner');
        $client = Client::with(['OwnerClient','Contract','Type','Direction.Localization.Parent.Parent'])
              ->when($owner_id != null, function ($query) use($owner_id) {
                  return $query->where('owner_clients_id', $owner_id);
              })
            ->when($search, function ($query, $search) {
                  return $query->where(function ($q) use ($search) {
                      $q->where("identification", 'LIKE', "%" . $search . "%")
                          ->orWhere("name", "LIKE", "%" . $search . "%")
                          ->orWhere("lastname", "LIKE", "%" . $search . "%")
                          ->orWhere("phone", "LIKE", "%" . $search . "%")
                          ->orWhere("email", "LIKE", "%" . $search . "%");
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
                'data' => $client,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/client",
     *      tags={"Client"},
     *      summary="Store new client",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials",
     *          @OA\JsonContent(
     *            required={"types_id","identification","lastname","name","phone","email"},
     *            @OA\Property(property="types_id", type="numeric"),
     *            @OA\Property(property="identification", type="string"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="phone", type="string"),
     *            @OA\Property(property="email", type="string",format="email", example="user2@gmail.com"),
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
                'owner_clients_id' => 'required|numeric',
                'types_id' => 'required|numeric',
                'identification' => 'required|string|max:12',
                'lastname' => 'required|string|max:30',
                'name' => 'required|string|max:30',
                'phone' => 'required|string|max:15',
                'email' => 'required|string|email|max:255|unique:owner_clients',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $client = Client::create([
            'owner_clients_id' => $request->input('owner_clients_id'),
            'types_id' => $request->input('types_id'),
            'identification' => $request->input('identification'),
            'lastname' => $request->input('lastname'),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email')
        ]);
        $direccition = Direction::create([
            'clients_id' => $client->id,
            'localizations_id' => $request->input('localization_municipality'),
            'direction' => $request->input('direction'),
            'house_number' => '',
            'apartment_number_tower_and_floor' => '',
            'urbanization' => '',
        ]);
        return response()->json(
            [
                'created' => true,
                'data' => $client,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Get(
     *      path="/api/client/{id}",
     *      tags={"Client"},
     *      summary="Get information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="client id",
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
        $client = Client::with(['OwnerClient','Contract','Type','Direction.Localization.Parent.Parent'])->find($id);
        if (!$client) {
            return response()->json(['error' => 'client_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $client,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }


    /**
     * @OA\Put(
     *      path="/api/client/{id}",
     *      operationId="profileUpdate",
     *      tags={"Client"},
     *      summary="Update existing",
     *      description="Returns updated clientes",
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
     *            required={"types_id","identification","lastname","name","phone","email"},
     *            @OA\Property(property="types_id", type="numeric"),
     *            @OA\Property(property="identification", type="string"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="lastname", type="string"),
     *            @OA\Property(property="phone", type="string"),
     *            @OA\Property(property="email", type="string",format="email", example="user2@gmail.com"),
     *            ),
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Validation error",
     *      @OA\JsonContent(
     *      @OA\Property(property="message", type="string", example="Sorry, client does not exist")
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
                'types_id' => 'required|numeric',
                'identification' => 'required|string|max:12',
                'lastname' => 'required|string|max:30',
                'name' => 'required|string|max:30',
                'phone' => 'required|string|max:15',
                'email' => 'required|string|email|max:255|unique:owner_clients',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $client = Client::findOrFail($id);
        $client->fill($request->all());
        $client->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $client,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

      /**
     * @OA\Delete(
     *      path="/api/client/{id}",
     *      operationId="Delete",
     *      tags={"Client"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Client id",
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
        $client = Client::with(['Contract'])->findorFail($id);
        if (count($client->contract) > 0) {
            return response()->json([
                'deleted' => True,
                'message' => 'Este elemento no se puede eliminar, porque tiene relaciones dependientes',
            ], 400);
        }
        $client->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
