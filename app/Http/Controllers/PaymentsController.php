<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\PaymentMethod;
use App\Models\Payments;
use App\Models\Invoice;
use Validator;

class PaymentsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/payments",
     *      tags={"Payments"},
     *      summary="Get list of Payments",
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
        $by = 'n_control'; // Order query by X column
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
        $payments = Payments::with(['Invoice','PaymentMethod'])
        	->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                       $q->where("n_control", 'ILIKE', "%" . $search . "%")
                       	->orWhere("n_reference", "ILIKE", "%" . $search . "%")
                       	->orWhere("name", "ILIKE", "%" . $search . "%")
                       	->orWhere("date", "ILIKE", "%" . $search . "%")
                        ->orWhere("canceled", "ILIKE", "%" . $search . "%");
                });
            })
            ->orderBy($by, $dir)
            ->orderBy('id', 'desc')
            ->paginate($paginate);

        return response()->json(
            [
                'listed' => True,
                'data' => $payments,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/payments",
     *      tags={"Payments"},
     *      summary="Store new Payments",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials", 
     *          @OA\JsonContent(
     *            required={"invoices_id","payment_method_id","n_control","n_reference","name","date","canceled"},
     *            @OA\Property(property="invoices_id", type="numeric"),
     *            @OA\Property(property="payment_method_id", type="numeric"),
     *            @OA\Property(property="n_control", type="string"),
     *            @OA\Property(property="n_reference", type="string"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="date", type="date"),
     *            @OA\Property(property="canceled", type="boolean"),
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
                'invoices_id' => 'required|numeric',
                'payment_method_id' => 'required|numeric',
                'n_control' => 'required|string',
                'n_reference' => 'required|string',
                'name' => 'required|string',
                'date' => 'required|date',
                'canceled' => 'required|boolean'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'invoices_id' => $request->get('invoices_id'),
            'payment_method_id' => $request->get('payment_method_id'),
            'n_control' => $request->input('n_control'),
            'n_reference' => $request->input('n_reference'),
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'canceled' => $request->input('canceled')
        ];
        $payments = Payments::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $payments,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Get(
     *      path="/api/payments/{id}",
     *      tags={"Payments"},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Payments",
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
        $payments = Payments::with(['Invoice','PaymentMethod'])->find($id);
        if (!$payments) {
            return response()->json(['error' => 'payments_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $payments,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Put(
     *      path="/api/payments/{id}",
     *      operationId="profileUpdate",
     *      tags={"Payments"},
     *      summary="Update existing",
     *      description="Returns updated Payments",
     *      @OA\Parameter(
     *          name="id",
     *          description="Payments",
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
     *            required={"invoices_id","payment_method_id","n_control","n_reference","name","date","canceled"},
     *            @OA\Property(property="invoices_id", type="numeric"),
     *            @OA\Property(property="payment_method_id", type="numeric"),
     *            @OA\Property(property="n_control", type="string"),
     *            @OA\Property(property="n_reference", type="string"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="date", type="date"),
     *            @OA\Property(property="canceled", type="boolean"),
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
                'invoices_id' => 'required|numeric',
                'payment_method_id' => 'required|numeric',
                'n_control' => 'required|string',
                'n_reference' => 'required|string',
                'name' => 'required|string',
                'date' => 'required|date',
                'canceled' => 'required|boolean'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $payments = Payments::findOrFail($id);
        $payments->fill($request->all());
        $payments->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $payments,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Delete(
     *      path="/api/payments/{id}",
     *      operationId="Delete",
     *      tags={"Payments"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" Elimina Payments ",
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
        $payments = Payments::findorFail($id);
        $payments->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
