<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Models\Direction;
use App\Models\Localization;
use App\Models\TypesLocalization;
use Validator;

class LocalizationController extends Controller
{
     /**
     * @OA\Get(
     *      path="/api/localization",
     *      tags={"Localization"},
     *      summary="Get list of Localization",
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
        if (request()->get('parent')) {
            $localization = Localization::with(['TypesLocalization','Parent'])
                ->where('localizations_id', request()->get('parent'))
                ->get();
        } else {
            $localization = Localization::with(['Direction','TypesLocalization'])
                ->where('localizations_id', null)
                ->get();
        }

        return response()->json(
            [
                'listed' => True, 
                'data' => $localization,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Post(
     *      path="/api/localization",
     *      tags={"Localization"},
     *      summary="Store new localization",
     *      description="Returns  data",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Pass user credentials",
     *          @OA\JsonContent(
     *            required={"types_localizations_id","localizations_id","name"},
     *            @OA\Property(property="types_localizations_id", type="numeric"),
     *            @OA\Property(property="localizations_id", type="numeric"),
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
                'types_localizations_id' => 'required|numeric',
                'localizations_id' => 'required|numeric',
                'name' => 'required|string|max:255'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $arr = [
            'types_localizations_id' => $request->get('types_localizations_id'),
            'localizations_id' => $request->get('localizations_id'),
            'name' => $request->input('name')
        ];
        $localization = Localization::create($arr);
        return response()->json(
            [
                'created' => true,
                'data' => $localization,
                'message' => 'Elemento creado exitosamente'
            ],
            200
        );
    }

   /**
     * @OA\Get(
     *      path="/api/localization/{id}",
     *      tags={"Localization"},
     *      summary="show information",
     *      description="Returns data",
     *      @OA\Parameter(
     *          name="id",
     *          description="localizaciones",
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
        $localization = Localization::with(['Direction','TypesLocalization','Parent'])->find($id);
        if (!$localization) {
            return response()->json(['error' => 'Localization_does_not_exist'], 404);
        }
        return response()->json(
            [
                'showed' => True,
                'data' => $localization,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

    /**
     * @OA\Put(
     *      path="/api/localization/{id}",
     *      operationId="profileUpdate",
     *      tags={"Localization"},
     *      summary="Update existing",
     *      description="Returns updated Localization",
     *      @OA\Parameter(
     *          name="id",
     *          description="Localization",
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
     *            required={"types_localizations_id","localizations_id","name"},
     *            @OA\Property(property="types_localizations_id", type="numeric"),
     *            @OA\Property(property="localizations_id", type="numeric"),
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
                'types_localizations_id' => 'required|numeric',
                'localizations_id' => 'required|numeric',
                'name' => 'required|string|max:255'
            ]
        );
        if ($validator->fails()) {
            return response()
                ->json(['error' => $validator->errors()], 422);
        }
        $localization = Localization::findOrFail($id);
        $localization->fill($request->all());
        $localization->save();
        return response()->json(
            [
                'updated' => True,
                'data' => $localization,
                'message' => 'Elemento obtenido exitosamente'
            ],
            200
        );
    }

     /**
     * @OA\Delete(
     *      path="/api/localization/{id}",
     *      operationId="Delete",
     *      tags={"Localization"},
     *      summary="Delete existing ",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description=" localization  ",
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
        $localization = Localization::findorFail($id);
        $localization->delete();
        return response()->json([
            'deleted' => True,
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
