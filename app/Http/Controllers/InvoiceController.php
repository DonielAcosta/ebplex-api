<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\Invoice;
use App\Models\Payments;
use Validator;

class InvoiceController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/invoice",
     *      tags={"Invoice"},
     *      summary="Get list of Invoice",
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
        $invoice = Invoice::with(['Payments'])
            ->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                        $q->where("n_control", 'ILIKE', "%" . $search . "%")
                        ->orWhere("n_reference", "ILIKE", "%" . $search . "%")
                        ->orWhere("total_amount", "ILIKE", "%" . $search . "%")
                        ->orWhere("status", "ILIKE", "%" . $search . "%")
                        ->orWhere("date", "ILIKE", "%" . $search . "%");
                });
            })
            ->orderBy($by, $dir)
            ->orderBy('id', 'desc')
            ->paginate($paginate);

        return response()->json(
            [
                'listed' => True,
                'data' => $invoice,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/invoice",
     *      tags={"Invoice"},
     *      summary="Store new Invoice",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials",
     *          @OA\JsonContent(
     *            required={"subscriptions_id","n_control","n_reference","total_amount"},
     *            @OA\Property(property="subscriptions_id", type="numeric"),
     *            @OA\Property(property="n_control", type="string"),
     *            @OA\Property(property="n_reference", type="string"),
     *            @OA\Property(property="total_amount", type="regex:/^\d+(\.\d{1,2})?$/"),
     *            @OA\Property(property="status", type="string"),
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
                'subscriptions_id' => 'required|numeric',
                'n_control' => 'required|string',
                'n_reference' => 'required|string',
                'total_amount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'status' => 'required|string',
                'date' => 'required|date',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'n_control' => $request->input('n_control'),
            'n_reference' => $request->input('n_reference'),
            'total_amount' => $request->input('total_amount'),
            'status' => $request->input('status'),
            'date' => $request->input('date'),
            'subscriptions_id' => $request->get('subscriptions_id'),
        ];
        $invoice = Invoice::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $invoice,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Get(
     *      path="/api/invoice/{id}",
     *      tags={"Invoice"},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="facturacion",
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
        $invoice = Invoice::with(['Payments'])->find($id);
        if (!$invoice) {
            return response()->json(['error' => 'invoice_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $invoice,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Put(
     *      path="/api/invoice/{id}",
     *      operationId="profileUpdate",
     *      tags={"Invoice"},
     *      summary="Update existing",
     *      description="Returns updated Invoice",
     *      @OA\Parameter(
     *          name="id",
     *          description="invoice",
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
     *            required={"subscriptions_id","n_control","n_reference","total_amount"},
     *            @OA\Property(property="subscriptions_id", type="numeric"),
     *            @OA\Property(property="n_control", type="string"),
     *            @OA\Property(property="n_reference", type="string"),
     *            @OA\Property(property="total_amount", type="regex:/^\d+(\.\d{1,2})?$/"),
     *            @OA\Property(property="status", type="string"),
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
                'n_control' => 'required|string',
                'n_reference' => 'required|string',
                'total_amount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'status' => 'required|string',
                'date' => 'required|date',
                'subscriptions_id' => 'required|numeric',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $invoice = Invoice::findOrFail($id);
        $invoice->fill($request->all());
        $invoice->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $invoice,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Delete(
     *      path="/api/invoice/{id}",
     *      operationId="Delete",
     *      tags={"Invoice"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" elimina cualquier factura que este  ",
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
        $invoice = Invoice::findorFail($id);
        $invoice->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
