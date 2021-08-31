<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\TypeUser;
use App\Models\User;
use Validator;

class TypeUserController extends Controller
{
      /**
     * @OA\Get(
     *      path="/api/type-user",
     *      tags={"Type User "},
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

    public function index(Request $request)
    {
        $paginate = request()->get('paginate');
        if ($paginate == null) {
            $paginate = 10;
        }
        $search = request()->get('search');
        $by = 'type'; // Order query by X column
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
        $type_user = TypeUser::with(['User'])
            ->where('level', '=', 2)
            ->where('type', '!=', 'Owner')
            ->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where("type", 'ILIKE', "%" . $search . "%")
                        ->orWhere("level", "ILIKE", "%" . $search . "%");
                });
            })
            ->orderBy($by, $dir)
            ->orderBy('id', 'desc')
            ->paginate($paginate);

        return response()->json(
            [
                'listed' => True,
                'data' => $type_user,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/type-user",
     *      tags={"Type User "},
     *      summary="Store new Type User",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials", 
     *          @OA\JsonContent(
     *            required={"type","level"},
     *            @OA\Property(property="type", type="string"),
     *            @OA\Property(property="level", type="string"),
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
                'type' => 'required|string',
                'level' => 'required|string',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'type' => $request->input('type'),
            'level' => $request->input('level')
        ];
        $type_user = TypeUser::create($arr);
        // $type_user = TypeUser::create($request->all());
        return response()->json(
            [
                'created' => true,
                'data' => $type_user,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Get(
     *      path="/api/type-user/{id}",
     *      tags={"Type User "},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Type User ",
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
        $type_user = TypeUser::with(['User'])->find($id);
        if (!$type_user) {
            return response()->json(['error' => 'type_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $type_user,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Put(
     *      path="/api/type-user/{id}",
     *      operationId="profileUpdate",
     *      tags={"Type User "},
     *      summary="Update existing",
     *      description="Returns updated Type User ",
     *      @OA\Parameter(
     *          name="id",
     *          description="Type User  ",
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
     *            required={"type","level"},
     *            @OA\Property(property="type", type="string"),
     *            @OA\Property(property="level", type="string"),
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
                'type' => 'required|string',
                'level' => 'required|string',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $type_user = TypeUser::findOrFail($id);
        $type_user->fill($request->all());
        $type_user->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $type_user,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Delete(
     *      path="/api/type-user/{id}",
     *      operationId="Delete",
     *      tags={"Type User "},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" Deleted Type User ",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Validation error",
     *      @OA\JsonContent(
     *      @OA\Property(property="message", type="string", example="Sorry,The type of user has linked users")
     *        )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Item removed successfully"
     *      ),
     * )
     */

    public function destroy($id)
    {
        $type_user = TypeUser::findorFail($id);
        $users = User::where('type_users_id', $id)->get();
        if (count($users) > 0) {
            return response()
                    ->json(['error' => 'EL tipo de usuario posee usuarios vinculados'], 422);
        }
        $type_user->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
