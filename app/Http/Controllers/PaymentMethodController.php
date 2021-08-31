<?php

namespace App\Http\Controllers;

use OpenApi\Annotations as OA;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use App\Models\Payments;
use Validator;

class PaymentMethodController extends Controller
{
     /**
     * @OA\Get(
     *      path="/api/payment_methods",
     *      tags={"Payment Method"},
     *      summary="Get list of Packages",
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
        $payment_method = PaymentMethod::with(['Payments'])
        	->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                       $q->where("name", 'ILIKE', "%" . $search . "%");
                });
            })
            ->orderBy($by, $dir)
            ->orderBy('id', 'desc')
            ->paginate($paginate);

        return response()->json(
            [
                'listed' => True,
                'data' => $payment_method,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/payment_methods",
     *      tags={"Payment Method"},
     *      summary="Store new Payment Method",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials", 
     *          @OA\JsonContent(
     *            required={"name"},
     *            @OA\Property(property="name", type="string"),
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
                'name' => 'required|string',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'name' => $request->input('name')
        ];
        $payment_method = PaymentMethod::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $payment_method,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }


     /**
     * @OA\Get(
     *      path="/api/payment_methods/{id}",
     *      tags={"Payment Method"},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Payment Method",
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
        $payment_method = PaymentMethod::with(['Payments'])->find($id);
        if (!$payment_method) {
            return response()->json(['error' => 'payment_method_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $payment_method,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Put(
     *      path="/api/payment_methods/{id}",
     *      operationId="profileUpdate",
     *      tags={"Payment Method"},
     *      summary="Update existing",
     *      description="Returns updated Payment Method",
     *      @OA\Parameter(
     *          name="id",
     *          description="Payment Method",
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
     *            required={"name"},
     *            @OA\Property(property="name", type="string"),
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
                'name' => 'required|string',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $payment_method = PaymentMethod::findOrFail($id);
        $payment_method->fill($request->all());
        $payment_method->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $payment_method,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Delete(
     *      path="/api/payment_methods/{id}",
     *      operationId="Delete",
     *      tags={"Payment Method"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" Elimina Payment Method ",
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
        $payment_method = PaymentMethod::findorFail($id);
        $payment_method->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
