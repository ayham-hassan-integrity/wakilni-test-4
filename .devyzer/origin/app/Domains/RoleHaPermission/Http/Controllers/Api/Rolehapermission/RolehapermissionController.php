<?php

namespace App\Domains\RoleHaPermission\Http\Controllers\Api\Rolehapermission;

use App\Http\Controllers\Controller;
use App\Domains\RoleHaPermission\Models\Rolehapermission;
use Illuminate\Http\Request;

/**
 * Class RolehapermissionController.
 */
class RolehapermissionController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/rolehapermission",
     * summary="Get All Rolehapermissions",
     * description="Show All Rolehapermissions",
     * operationId="getAllRolehapermissions",
     * tags={"Rolehapermission"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Rolehapermission are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="permission_id", type="Integer", example="1"),
     *       @OA\Property(property="role_id", type="Integer", example="1"),
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
        return Rolehapermission::all();
    }



    /**
     * @OA\Get(
     * path="/api/rolehapermission/{id}",
     * summary="Get Rolehapermission by id",
     * description="Show one Rolehapermission by id",
     * operationId="getOneRolehapermissions",
     * tags={"rolehapermission"},
     * @OA\Parameter(
     *    description="ID of rolehapermission",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when rolehapermission id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Rolehapermission is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="permission_id", type="Integer", example="1"),
     *       @OA\Property(property="role_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Rolehapermission $rolehapermission)
    {
        return $rolehapermission;
    }

    /**
     * @OA\Post (
     * path="/api/rolehapermission",
     * summary="Create New Rolehapermission",
     * description="Create One Rolehapermission",
     * operationId="postOneRolehapermissions",
     * tags={"rolehapermission"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Rolehapermission fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="permission_id", type="Integer", example="1"),
     *       @OA\Property(property="role_id", type="Integer", example="1"),
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
     *    description="Returns when Rolehapermission has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="permission_id", type="Integer", example="1"),
     *       @OA\Property(property="role_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $rolehapermission = Rolehapermission::create($request->all());
        return response()->json($rolehapermission, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/rolehapermission/{id}",
     * summary="Edit one Rolehapermission by id",
     * description="update One Rolehapermission by id",
     * operationId="postOneRolehapermissions",
     * tags={"rolehapermission"},
     * @OA\Parameter(
     *    description="ID of rolehapermission",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Rolehapermission fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="permission_id", type="Integer", example="1"),
     *       @OA\Property(property="role_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Rolehapermission has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="permission_id", type="Integer", example="1"),
     *       @OA\Property(property="role_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Rolehapermission $rolehapermission)
    {
        $rolehapermission->update($request->all());

        return response()->json($rolehapermission, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/rolehapermission/{id}",
     * summary="delete Rolehapermission by id",
     * description="delete one Rolehapermission by id",
     * operationId="deleteOneRolehapermissions",
     * tags={"rolehapermission"},
     * @OA\Parameter(
     *    description="ID of rolehapermission",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when rolehapermission id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Rolehapermissions are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="permission_id", type="Integer", example="1"),
     *       @OA\Property(property="role_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Rolehapermission $rolehapermission)
    {
        $rolehapermission->delete();

        return response()->json($rolehapermission, 200);
    }
}