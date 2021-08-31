<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\Direction;
use App\Models\Localization;
use Validator;

class DirectionController extends Controller
{
      /**
     * @OA\Get(
     *      path="/api/direction",
     *      tags={"Direction"},
     *      summary="Get list of Direction",
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
        $by = 'direction'; // Order query by X column
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
        $direction = Direction::with(['Client','Localization'])
            ->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where("direction", 'ILIKE', "%" . $search . "%")
                        ->orWhere("house_number", "ILIKE", "%" . $search . "%")
                        ->orWhere("apartment_number_tower_and_floor", "ILIKE", "%" . $search . "%")
                        ->orWhere("urbanization", "ILIKE", "%" . $search . "%");
                });
            })
            ->orderBy($by, $dir)
            ->orderBy('id', 'desc')
            ->paginate($paginate);

        return response()->json(
            [
                'listed' => True,
                'data' => $direction,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

      /**
     * @OA\Post(
     *      path="/api/direction",
     *      tags={"Direction"},
     *      summary="Store new Direction",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials",
     *          @OA\JsonContent(
     *            required={"clients_id","localizations_id","direction","house_number","apartment_number_tower_and_floor","urbanization"},
     *            @OA\Property(property="clients_id", type="numeric"),
     *            @OA\Property(property="localizations_id", type="numeric"),
     *            @OA\Property(property="direction", type="string"),
     *            @OA\Property(property="house_number", type="string"),
     *            @OA\Property(property="apartment_number_tower_and_floor", type="string"),
     *            @OA\Property(property="urbanization", type="string"),
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
                'clients_id' => 'required|numeric',
                'localizations_id' => 'required|numeric',
                'direction' => 'required|string|max:255',
                'house_number' => 'required|string|max:255',
                'apartment_number_tower_and_floor' => 'required|string|max:255',
                'urbanization' => 'required|string|max:255',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'clients_id' => $request->get('clients_id'),
            'localizations_id' => $request->get('localizations_id'),
            'direction' => $request->input('direction'),
            'house_number' => $request->input('house_number'),
            'apartment_number_tower_and_floor' => $request->input('apartment_number_tower_and_floor'),
            'urbanization' => $request->input('urbanization'),
        ];
        $direction = Direction::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $direction,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Get(
     *      path="/api/direction/{id}",
     *      tags={"Direction"},
     *      summary="Get information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Direction ",
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
        $direction = Direction::with(['Client','Localization'])->find($id);
        if (!$direction) {
            return response()->json(['error' => 'direction_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $direction,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Put(
     *      path="/api/direction/{id}",
     *      operationId="profileUpdate",
     *      tags={"Direction"},
     *      summary="Update existing",
     *      description="Returns updated data company",
     *      @OA\Parameter(
     *          name="id",
     *          description="direction",
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
     *            required={"clients_id","localizations_id","direction","house_number","apartment_number_tower_and_floor","urbanization"},
     *            @OA\Property(property="clients_id", type="numeric"),
     *            @OA\Property(property="localizations_id", type="numeric"),
     *            @OA\Property(property="direction", type="string"),
     *            @OA\Property(property="house_number", type="string"),
     *            @OA\Property(property="apartment_number_tower_and_floor", type="string"),
     *            @OA\Property(property="urbanization", type="string"),
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
                'clients_id' => 'required|numeric',
                'localizations_id' => 'required|numeric',
                'direction' => 'required|string|max:255',
                'house_number' => 'required|string|max:255',
                'apartment_number_tower_and_floor' => 'required|string|max:255',
                'urbanization' => 'required|string|max:255',
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $direction = Direction::findOrFail($id);
        $direction->fill($request->all());
        $direction->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $direction,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Delete(
     *      path="/api/direction/{id}",
     *      operationId="Delete",
     *      tags={"Direction"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Direction",
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
        $direction = Direction::findorFail($id);
        $direction->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
