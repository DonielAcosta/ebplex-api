<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\Subscriptions;
use App\Models\Plans;
use App\Models\OwnerClient;
use App\Models\Invoice;
use Validator;

class SubscriptionsController extends Controller
{
      /**
     * @OA\Get(
     *      path="/api/subscriptions",
     *      tags={"Subscriptions "},
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
        $subscriptions = Subscriptions::with(['Plans','OwnerClient','Invoice'])
        	->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                       $q->where("name", 'ILIKE', "%" . $search . "%")
                       	->orWhere("date", "ILIKE", "%" . $search . "%")
                       	->orWhere("price", "ILIKE", "%" . $search . "%")
                        ->orWhere("inactive", "ILIKE", "%" . $search . "%");
                });
            })
            ->orderBy($by, $dir)
            ->orderBy('id', 'desc')
            ->paginate($paginate);

        return response()->json(
            [
                'listed' => True,
                'data' => $subscriptions,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/subscriptions",
     *      tags={"Subscriptions "},
     *      summary="Store new Subscriptions",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials", 
     *          @OA\JsonContent(
     *            required={"plans_id","owner_clients_id","name","date","price","inactive"},
     *            @OA\Property(property="plans_id", type="numeric"),
     *            @OA\Property(property="owner_clients_id", type="numeric"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="date", type="date"),
     *            @OA\Property(property="price", type="regex:/^\d+(\.\d{1,2})?$/"),
     *            @OA\Property(property="inactive", type="boolean"),
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
                'plans_id' => 'required|numeric',
                'owner_clients_id' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'date' => 'required|date',
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'inactive'=>'required|boolean',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'plans_id' => $request->get('plans_id'),
            'owner_clients_id' => $request->get('plans_id'),
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'price' => $request->input('price'),
            'inactive' => $request->input('inactive')
        ];
        $subscriptions = Subscriptions::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $subscriptions,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Get(
     *      path="/api/subscriptions/{id}",
     *      tags={"Subscriptions "},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Subscriptions ",
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
        $subscriptions = Subscriptions::with(['Plans','OwnerClient','Invoice'])->find($id);
        if (!$subscriptions) {
            return response()->json(['error' => 'subscriptions_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $subscriptions,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Put(
     *      path="/api/subscriptions/{id}",
     *      operationId="profileUpdate",
     *      tags={"Subscriptions "},
     *      summary="Update existing",
     *      description="Returns updated Subscriptions",
     *      @OA\Parameter(
     *          name="id",
     *          description="Subscriptions ",
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
     *            required={"plans_id","owner_clients_id","name","date","price","inactive"},
     *            @OA\Property(property="plans_id", type="numeric"),
     *            @OA\Property(property="owner_clients_id", type="numeric"),
     *            @OA\Property(property="name", type="string"),
     *            @OA\Property(property="date", type="date"),
     *            @OA\Property(property="price", type="regex:/^\d+(\.\d{1,2})?$/"),
     *            @OA\Property(property="inactive", type="boolean"),
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
                'plans_id' => 'required|numeric',
                'owner_clients_id' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'date' => 'required|date',
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'inactive'=>'required|boolean'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $subscriptions = Subscriptions::findOrFail($id);
        $subscriptions->fill($request->all());
        $subscriptions->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $subscriptions,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Delete(
     *      path="/api/subscriptions/{id}",
     *      operationId="Delete",
     *      tags={"Subscriptions "},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" Elimina Subscriptions ",
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
        $subscriptions = Subscriptions::findorFail($id);
        $subscriptions->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
