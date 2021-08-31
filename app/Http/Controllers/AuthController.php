<?php   
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use OpenApi\Annotations as OA;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Models\User;

class AuthController extends Controller {

    /**
     * @OA\Post(
     * path="/api/login",
     * summary="Sign in",
     * description="Login by email, password",
     * operationId="authLogin",
     * tags={"Register"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user credentials",
     *    @OA\JsonContent(
     *       required={"email","password"},
     *       @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
     *       @OA\Property(property="password", type="string", format="password", example="PassWord12345"),
     *    ),
     * ),
     * @OA\Response(
     *    response=400,
     *    description="credenciales invalidas",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Wrong credentials response")
     *        )
     *     ),
     * @OA\Response(
     *    response=500,
     *    description="Wrong credentials response",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Sorry, credenciales invalidas")
     *        )
     *     )
     * )
     */
        
    public function auth(Request $request) {
        $credentials = $request->only('email', 'password');
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['message' => 'credenciales invalidas'], 400);
            } else {
                $user = User::with(['UserData','UserData.SexUserData','TypeUser', 'OwnerClient','InstallOrderUser'])
                ->where('email', $credentials['email'])->get();
                return response()->json(['user' => $user[0], 'token' => compact('token')]);
            }
        } catch (JWTException $e) {
            return response()->json(['message' => 'no se pudo acceder, error de servidor'], 500);
        }
    }

     /**
     * @OA\Get(
     *      path="/api/user",
     *      tags={"Register"},
     *      summary="Get information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="getAuthUser",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found",
     *      @OA\JsonContent(
     *      @OA\Property(property="message", type="string", example="Sorry, user Not Found")
     *        )
     *      ),
     * )
     */

    public function getAuthUser() {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
                return response()->json(['token_expired'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
                return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
                return response()->json(['token_absent'], $e->getStatusCode());
        }
        return response()->json(compact('user'));
    }

    /**
     * @OA\Post(
     *      path="/api/register",
     *      tags={"Register"},
     *      summary="Store new register",
     *      description="Returns  register data",
     *      security={ {"bearer": {} }},
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials",
     *          @OA\JsonContent(
     *            required={"name","email","type_users_id","password","password_confirmation","active","delete"},
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="email", type="string",format="email", example="user2@gmail.com"),
     *            @OA\Property(property="type_users_id", type="string"),
     *            @OA\Property(property="password", type="string"),
     *            @OA\Property(property="password_confirmation", type="string"),
     *            @OA\Property(property="active", type="boolean",example="true"),
     *            @OA\Property(property="delete", type="boolean",example="false"),
     *            ),
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="message", type="string", example="Sorry, Bad Request ")
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

    public function signUp(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required ',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'type_users_id' => 2,
            'password' => Hash::make($request->get('password')),
            'active' => true,
            'delete' =>false
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);
    }
}