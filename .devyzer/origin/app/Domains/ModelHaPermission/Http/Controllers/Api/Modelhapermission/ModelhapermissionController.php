<?php

namespace App\Domains\ModelHaPermission\Http\Controllers\Api\Modelhapermission;

use App\Http\Controllers\Controller;
use App\Domains\ModelHaPermission\Models\Modelhapermission;
use Illuminate\Http\Request;

/**
 * Class ModelhapermissionController.
 */
class ModelhapermissionController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/modelhapermission",
     * summary="Get All Modelhapermissions",
     * description="Show All Modelhapermissions",
     * operationId="getAllModelhapermissions",
     * tags={"Modelhapermission"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Modelhapermission are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="permission_id", type="Integer", example="1"),
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
        return Modelhapermission::all();
    }



    /**
     * @OA\Get(
     * path="/api/modelhapermission/{id}",
     * summary="Get Modelhapermission by id",
     * description="Show one Modelhapermission by id",
     * operationId="getOneModelhapermissions",
     * tags={"modelhapermission"},
     * @OA\Parameter(
     *    description="ID of modelhapermission",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when modelhapermission id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Modelhapermission is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="permission_id", type="Integer", example="1"),
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
    public function show(Modelhapermission $modelhapermission)
    {
        return $modelhapermission;
    }

    /**
     * @OA\Post (
     * path="/api/modelhapermission",
     * summary="Create New Modelhapermission",
     * description="Create One Modelhapermission",
     * operationId="postOneModelhapermissions",
     * tags={"modelhapermission"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Modelhapermission fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="permission_id", type="Integer", example="1"),
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
     *    description="Returns when Modelhapermission has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="permission_id", type="Integer", example="1"),
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
        $modelhapermission = Modelhapermission::create($request->all());
        return response()->json($modelhapermission, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/modelhapermission/{id}",
     * summary="Edit one Modelhapermission by id",
     * description="update One Modelhapermission by id",
     * operationId="postOneModelhapermissions",
     * tags={"modelhapermission"},
     * @OA\Parameter(
     *    description="ID of modelhapermission",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Modelhapermission fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="permission_id", type="Integer", example="1"),
     *       @OA\Property(property="model_id", type="Integer", example="1"),
     *       @OA\Property(property="model_type", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Modelhapermission has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="permission_id", type="Integer", example="1"),
     *       @OA\Property(property="model_id", type="Integer", example="1"),
     *       @OA\Property(property="model_type", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Modelhapermission $modelhapermission)
    {
        $modelhapermission->update($request->all());

        return response()->json($modelhapermission, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/modelhapermission/{id}",
     * summary="delete Modelhapermission by id",
     * description="delete one Modelhapermission by id",
     * operationId="deleteOneModelhapermissions",
     * tags={"modelhapermission"},
     * @OA\Parameter(
     *    description="ID of modelhapermission",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when modelhapermission id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Modelhapermissions are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="permission_id", type="Integer", example="1"),
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
    public function delete(Modelhapermission $modelhapermission)
    {
        $modelhapermission->delete();

        return response()->json($modelhapermission, 200);
    }
}