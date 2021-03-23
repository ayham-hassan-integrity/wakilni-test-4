<?php

namespace App\Domains\ModelHaRole\Http\Controllers\Api\Modelharole;

use App\Http\Controllers\Controller;
use App\Domains\ModelHaRole\Models\Modelharole;
use Illuminate\Http\Request;

/**
 * Class ModelharoleController.
 */
class ModelharoleController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/modelharole",
     * summary="Get All Modelharoles",
     * description="Show All Modelharoles",
     * operationId="getAllModelharoles",
     * tags={"Modelharole"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Modelharole are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="role_id", type="Integer", example="1"),
     *       @OA\Property(property="model_id", type="Integer", example="1"),
     *       @OA\Property(property="model_type", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function index()
    {
        return Modelharole::all();
    }



    /**
     * @OA\Get(
     * path="/api/modelharole/{id}",
     * summary="Get Modelharole by id",
     * description="Show one Modelharole by id",
     * operationId="getOneModelharoles",
     * tags={"modelharole"},
     * @OA\Parameter(
     *    description="ID of modelharole",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when modelharole id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Modelharole is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="role_id", type="Integer", example="1"),
     *       @OA\Property(property="model_id", type="Integer", example="1"),
     *       @OA\Property(property="model_type", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Modelharole $modelharole)
    {
        return $modelharole;
    }

    /**
     * @OA\Post (
     * path="/api/modelharole",
     * summary="Create New Modelharole",
     * description="Create One Modelharole",
     * operationId="postOneModelharoles",
     * tags={"modelharole"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Modelharole fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="role_id", type="Integer", example="1"),
     *       @OA\Property(property="model_id", type="Integer", example="1"),
     *       @OA\Property(property="model_type", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=401,
     *    description="Returns when name or description deos'nt o the RequestBody ",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="name and description field are required"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Modelharole has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="role_id", type="Integer", example="1"),
     *       @OA\Property(property="model_id", type="Integer", example="1"),
     *       @OA\Property(property="model_type", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $modelharole = Modelharole::create($request->all());
        return response()->json($modelharole, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/modelharole/{id}",
     * summary="Edit one Modelharole by id",
     * description="update One Modelharole by id",
     * operationId="postOneModelharoles",
     * tags={"modelharole"},
     * @OA\Parameter(
     *    description="ID of modelharole",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Modelharole fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="role_id", type="Integer", example="1"),
     *       @OA\Property(property="model_id", type="Integer", example="1"),
     *       @OA\Property(property="model_type", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Modelharole has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="role_id", type="Integer", example="1"),
     *       @OA\Property(property="model_id", type="Integer", example="1"),
     *       @OA\Property(property="model_type", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Modelharole $modelharole)
    {
        $modelharole->update($request->all());

        return response()->json($modelharole, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/modelharole/{id}",
     * summary="delete Modelharole by id",
     * description="delete one Modelharole by id",
     * operationId="deleteOneModelharoles",
     * tags={"modelharole"},
     * @OA\Parameter(
     *    description="ID of modelharole",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when modelharole id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Modelharoles are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="role_id", type="Integer", example="1"),
     *       @OA\Property(property="model_id", type="Integer", example="1"),
     *       @OA\Property(property="model_type", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Modelharole $modelharole)
    {
        $modelharole->delete();

        return response()->json($modelharole, 200);
    }
}