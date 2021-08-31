<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\User;
use App\Models\SexUserData;
use App\Models\UserData;
use Validator;

class UserDataController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/user_data",
     *      operationId="getuser_data",
     *      tags={"User Data "},
     *      summary="Get list of User Data",
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
        $user_data = UserData::with(['User','SexUserData'])
        	->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                       $q->where("name", 'ILIKE', "%" . $search . "%")
                       	->orWhere("lastname", "ILIKE", "%" . $search . "%")
                       	->orWhere("identification", "ILIKE", "%" . $search . "%")
                       	->orWhere("date_of_birth", "ILIKE", "%" . $search . "%")
                       	->orWhere("phone", "ILIKE", "%" . $search . "%");
                });
            })
            ->orderBy($by, $dir)
            ->orderBy('id', 'desc')
            ->paginate($paginate);

        return response()->json(
            [
                'listed' => True,
                'data' => $user_data,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/user_data",
     *      operationId="storeuser_data",
     *      tags={"User Data "},
     *      summary="Store new User Data",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials", 
     *          @OA\JsonContent(
     *            required={"sex_user_data_id","name","lastname","date","identification","date_of_birth","img"},
     *            @OA\Property(property="sex_user_data_id", type="numeric", example = "1"),
     *            @OA\Property(property="name", type="string",example = "juan"),
     *            @OA\Property(property="lastname", type="numeric",example = "Perez"),
     *            @OA\Property(property="identification", type="string", example = "V25237858"),
     *            @OA\Property(property="date_of_birth", type="date",  example = "18/11/1995"),
     *            @OA\Property(property="phone", type="string",example = "+584120749550"),
     *            @OA\Property(property="img", type="string"),
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
                'sex_user_data_id' => 'required|numeric',
                'name' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'identification' => 'required|string|max:15',
                'date_of_birth' => 'required|date',
                'phone' => 'required|string|max:15'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'sex_user_data_id' => $request->get('sex_user_data_id'),
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'identification' => $request->input('identification'),
            'date_of_birth' => $request->input('date_of_birth'),
            'phone' => $request->input('phone'),
            'img' => $request->input('img'),
        ];
        $user_data = UserData::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $user_data,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }


    /**
     * @OA\Get(
     *      path="/api/user_data/{id}",
     *      operationId="getuser_dataById",
     *      tags={"User Data "},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="User Data ",
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
        $user_data = UserData::with(['User','SexUserData'])->find($id);
        if (!$user_data) {
            return response()->json(['error' => 'user_data_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $user_data,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }
    
        /**
     * @OA\Put(
     *      path="/api/user_data/{id}",
     *      operationId="Updateuser_data",
     *      tags={"User Data "},
     *      summary="Update existing",
     *      description="Returns updated User Data",
     *      @OA\Parameter(
     *          name="id",
     *          description="User Data ",
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
     *            required={"sex_user_data_id","name","lastname","date","identification","date_of_birth","img"},
     *            @OA\Property(property="sex_user_data_id", type="numeric", example = "1"),
     *            @OA\Property(property="name", type="string",example = "juan"),
     *            @OA\Property(property="lastname", type="numeric",example = "Perez"),
     *            @OA\Property(property="identification", type="string", example = "V25237858"),
     *            @OA\Property(property="date_of_birth", type="date",  example = "18/11/1995"),
     *            @OA\Property(property="phone", type="string",example = "+584120749550"),
     *            @OA\Property(property="img", type="string"),
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
                'sex_user_data_id' => 'required|numeric',
                'name' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'identification' => 'required|string|max:15',
                'date_of_birth' => 'required|date',
                'phone' => 'required|string|max:15',
                'img' => 'required|string'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $user_data = UserData::findOrFail($id);
        $user_data->fill($request->all());
        $user_data->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $user_data,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Delete(
     *      path="/user_data/{id}",
     *      operationId="Deleteuser_data",
     *      tags={"User Data "},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" User Data ",
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
        $user_data = UserData::findorFail($id);
        $user_data->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
