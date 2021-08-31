<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\DataCompany;
use Validator;

class DataCompanyController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/datacompany",
     *      tags={"Data Company"},
     *      summary="Get list of datacompany",
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
        $by = 'legal_representative'; // Order query by X column
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
        $datacompany = DataCompany::with(['OwnerClient'])
            ->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                        $q->where("bussiness_name", 'ILIKE', "%" . $search . "%")
                        ->orWhere("legal_representative", "ILIKE", "%" . $search . "%");
                });
        })
        ->orderBy($by, $dir)
        ->orderBy('id', 'desc')
        ->paginate($paginate);

        return response()->json(
            [
                'listed' => True,
                'data' => $datacompany,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/datacompany",
     *      tags={"Data Company"},
     *      summary="Store new datacompany",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials",
     *          @OA\JsonContent(
     *            required={"owner_clients_id","bussiness_name","legal_representative"},
     *            @OA\Property(property="owner_clients_id", type="numeric"),
     *            @OA\Property(property="bussiness_name", type="string"),
     *            @OA\Property(property="legal_representative", type="string"),
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
                'owner_clients_id' => 'required|numeric',
                'bussiness_name' => 'required|string|max:255',
                'legal_representative' => 'required|string|max:255'

            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'owner_clients_id' => $request->get('owner_clients_id'),
            'bussiness_name' => $request->input('bussiness_name'),
            'legal_representative' => $request->input('legal_representative')
        ];
        $datacompany = DataCompany::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $datacompany,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Get(
     *      path="/api/datacompany/{id}",
     *      tags={"Data Company"},
     *      summary="Get information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="data company ",
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
        $datacompany = DataCompany::with(['OwnerClient'])->find($id);
        if (!$datacompany) {
            return response()->json(['error' => 'data_company_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $datacompany,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

   /**
     * @OA\Put(
     *      path="/api/datacompany/{id}",
     *      operationId="profileUpdate",
     *      tags={"Data Company"},
     *      summary="Update existing",
     *      description="Returns updated data company",
     *      @OA\Parameter(
     *          name="id",
     *          description="datacompany id",
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
     *            required={"owner_clients_id","bussiness_name","legal_representative"},
     *            @OA\Property(property="owner_clients_id", type="numeric"),
     *            @OA\Property(property="bussiness_name", type="string"),
     *            @OA\Property(property="legal_representative", type="string"),
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
                'owner_clients_id' => 'required|numeric',
                'bussiness_name' => 'required|string|max:255',
                'legal_representative' => 'required|string|max:255'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $datacompany = DataCompany::findOrFail($id);
        $datacompany->fill($request->all());
        $datacompany->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $datacompany,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }


     /**
     * @OA\Delete(
     *      path="/api/datacompany/{id}",
     *      operationId="Delete",
     *      tags={"Data Company"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Data Company",
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
        $datacompany = DataCompany::findorFail($id);
        $datacompany->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
