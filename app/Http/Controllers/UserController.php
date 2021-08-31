<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use OpenApi\Annotations as OA;
use Carbon\Carbon;
use App\Models\User;
use App\Models\UserData;
use App\Models\TypeUser;
use App\Models\OwnerClient;
use App\Models\InstallationOrders;
use App\Models\HistoricalIntallationOrder;
use App\Models\DataCompany;
use Validator;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/users",
     *      tags={"Users "},
     *      summary="Get list of Subscriptions",
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

    public function index()
    {
        $paginate = request()->get('paginate');
        if ($paginate == null) {
            $paginate = 10;
        }
        $search = request()->get('search');
        $by = 'email'; // Order query by X column
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
        $technical = request()->get('technical');
        $users = User::with(['UserData','TypeUser', 'OwnerClient','InstallOrderUser','HistoricalIntallationOrder'])
            ->where('type_users_id', '=', 3)
            ->orWhere('type_users_id', '=', 4)
            ->when($technical != null, function ($query) use($technical) {
                return $query->where('type_users_id', 3);
            })
            ->when($owner_id != null, function ($query) use($owner_id) {
                return $query->where('owner_clients_id', $owner_id);
            })
            ->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                        $q->where("email", 'ILIKE', "%" . $search . "%");
                });
            })
            ->orderBy($by, $dir)
            ->paginate($paginate);
        return response()->json(
            [
                'listed' => True,
                'data' => $users,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/users",
     *      tags={"Users "},
     *      summary="Store new Users",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials", 
     *          @OA\JsonContent(
     *            required={"owner_clients_id","email","type_users_id","sex_user_data_id","name","lastname","identification","date_of_birth","phone","active","password"},
     *            @OA\Property(property="owner_clients_id", type="numeric"),
     *            @OA\Property(property="email", type="string"),
     *            @OA\Property(property="type_users_id", type="numeric"),
     *            @OA\Property(property="sex_user_data_id", type="numeric"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="lastname", type="string"),
     *            @OA\Property(property="identification", type="string"),
     *            @OA\Property(property="date_of_birth", type="date"),
     *            @OA\Property(property="phone", type="string"),
     *            @OA\Property(property="active", type="boolean"),
     *            @OA\Property(property="password", type="string"),
     *            ),
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description=" Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="message", type="string", example="Sorry, Bad Request, Unprocessable Entity ")
     *        )
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="solicitud ha tenido éxito",
     *     @OA\JsonContent(
     *      @OA\Property(property="message", type="string", example="request has been successful")
     *        )
     *      )
     * )
     */

    public function store(Request $request)
    {
        $form = json_decode($request->input('form'));
        // $validator = Validator::make($form, [
        //     'owner_clients_id' => 'required ',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'type_users_id' => 'numeric|required ',
        //     'sex_user_data_id' => 'numeric|required ',
        //     'name' => 'required|string|max:255',
        //     'lastname' => 'required|string|max:30',
        //     'identification' => 'required|string|max:12',
        //     'date_of_birth' => 'required|date',
        //     'phone' => 'required|string|max:15',
        //     'active'=>'required|boolean',
        // ]);
        
        // if ($validator->fails()) {
        //     return response()->json($validator->errors()->toJson(), 400);
        // }
        $file = $request->file('file');
        $path = Storage::disk('public')->put('profile', $file);
        $user = User::create([
            'email' => $form->email,
            'type_users_id' =>  $form->type_users_id,
            'owner_clients_id' =>  $form->owner_clients_id,
            'active' => $form->active,
            'password' => Hash::make($form->password)
        ]);
        $date = new Carbon($form->date_of_birth); 
        $userData = UserData::create([
            'users_id' => $user->id,
            'sex_user_data_id' => $form->sex_user_data_id,
            'name' => $form->name,
            'lastname' => $form->lastname,
            'identification' => $form->identification,
            'date_of_birth' => $date,
            'phone' => $form->phone,
            'img' => $path,
        ]);
        return response()->json(['data' => 
            [
                'user' => $user,
                'userData' => $userData,
            ],
            'message' => 'Usuario creado exitosamente'
        ], 201);
    }

    /**
     * @OA\Post(
     *      path="/api/subscribe",
     *      tags={"Users "},
     *      summary="Store new subscribe",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials", 
     *          @OA\JsonContent(
     *            required={"email","sex_user_data_id","name","lastname","identification"
     *                      ,"lastname","identification","date_of_birth","phone","description",
     *                      "owner_clients_id","bussiness_name","legal_representative","type_users_id"
     *                      ,"active","password","users_id"},
     *            @OA\Property(property="email", type="string"),
     *            @OA\Property(property="sex_user_data_id", type="numeric"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="lastname", type="string"),
     *            @OA\Property(property="identification", type="string"),
     *            @OA\Property(property="date_of_birth", type="date"),
     *            @OA\Property(property="phone", type="string"),
     *            @OA\Property(property="description", type="string"),
     *            @OA\Property(property="owner_clients_id", type="numeric"),
     *            @OA\Property(property="bussiness_name", type="string"),
     *            @OA\Property(property="legal_representative", type="string"),
     *            @OA\Property(property="type_users_id", type="numeric"),
     *            @OA\Property(property="active", type="boolean",example= "true"),
     *            @OA\Property(property="password", type="string"),
     *            @OA\Property(property="users_id", type="numeric"),
     *            ),
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description=" Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="message", type="string", example="Sorry, Bad Request, Unprocessable Entity ")
     *        )
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="solicitud ha tenido éxito",
     *     @OA\JsonContent(
     *      @OA\Property(property="message", type="string", example="request has been successful")
     *        )
     *      )
     * )
     */

    public function subscribe(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'sex_user_data_id' => 'numeric|required ',
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:30',
            'identification' => 'required|string|max:12',
            'phone' => 'required|string|max:15',
            'date_of_birth' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $owner_client = OwnerClient::create([
            'identification' => $request->input('identification'),
            'name' =>  $request->input('name').' '.$request->input('lastname'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'description' => '',
        ]);
        $data_company = DataCompany::create([
            'owner_clients_id' => $owner_client->id,
            'bussiness_name' =>  $request->input('company'),
            'legal_representative' => $request->input('legal_representative'),
        ]);
        $user = User::create([
            'email' => $request->input('email'),
            'type_users_id' =>  2,
            'owner_clients_id' =>  $owner_client->id,
            'active' => true,
            'password' => Hash::make($request->input('password')),
        ]);
        $date = new Carbon($request->input('date_of_birth')); 
        $userData = UserData::create([
            'users_id' => $user->id,
            'sex_user_data_id' => $request->input('sex_user_data_id'),
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'identification' => $request->input('identification'),
            'date_of_birth' => $date,
            'phone' => $request->input('phone'),
        ]);
        return response()->json(['data' => 
            [
                'user' => $user,
                'userData' => $userData,
            ],
            'message' => 'Suscripción existosa'
        ], 201);
    }

    /**
     * @OA\Get(
     *      path="/api/users_show/{id}",
     *      tags={"Users "},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Users ",
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
        $users = User::with(['UserData', 'TypeUser','OwnerClient','InstallOrderUser','HistoricalIntallationOrder'])->find($id);
        if (!$users) {
            return response()->json(['error' => 'user_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $users,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

   /**
     * @OA\Put(
     *      path="/api/users/{id}",
     *      operationId="profileUpdate",
     *      tags={"Users "},
     *      summary="Update existing",
     *      description="Returns updated Users",
     *      @OA\Parameter(
     *          name="id",
     *          description="Users ",
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
     *            required={"owner_clients_id","email","type_users_id","sex_user_data_id","name","lastname","identification","date_of_birth","phone","active"},
     *            @OA\Property(property="owner_clients_id", type="numeric"),
     *            @OA\Property(property="email", type="string"),
     *            @OA\Property(property="type_users_id", type="numeric"),
     *            @OA\Property(property="sex_user_data_id", type="numeric"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="lastname", type="string"),
     *            @OA\Property(property="identification", type="string"),
     *            @OA\Property(property="date_of_birth", type="date"),
     *            @OA\Property(property="phone", type="string"),
     *            @OA\Property(property="active", type="boolean"),
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
        $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'type_users_id' => 'numeric|required ',
                'sex_user_data_id' => 'numeric|required ',
                'lastname' => 'required|string|max:30',
                'identification' => 'required|string|max:12',
                'date_of_birth' => 'required|date',
                'phone' => 'required|string|max:15',
                'active'=>'required|boolean',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        $user = User::findOrFail($id);
        $user_data = UserData::where('users_id', $id)->first();
        $user->fill([
            'email' => $request->input('email'),
            'type_users_id' =>  $request->input('type_users_id'),
            'active' => $request->input('active'),
        ]);
        $user_data->fill([
            'sex_user_data_id' => $request->input('sex_user_data_id'),
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'identification' => $request->input('identification'),
            'date_of_birth' => $request->input('date_of_birth'),
            'phone' => $request->input('phone'),
        ]);
        $user->save();
        $user_data->save();
        return response()->json(
            [
                'updated' => True,
                'data' => [
                    'user' => $user,
                    'userData' => $user_data,
                ],
                'message' => 'Elemento actualizado exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Delete(
     *      path="/api/users/{id}",
     *      operationId="Delete",
     *      tags={"User "},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" Elimina User ",
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
        $user = User::findorFail($id);
        $user->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
