<?php

namespace App\Domains\Role\Http\Controllers\Api\Role;

use App\Http\Controllers\Controller;
use App\Domains\Role\Models\Role;
use Illuminate\Http\Request;

/**
 * Class RoleController.
 */
class RoleController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/role",
     * summary="Get All Roles",
     * description="Show All Roles",
     * operationId="getAllRoles",
     * tags={"Role"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Role are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="guard_name", type="text", example="1"),
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
        return Role::all();
    }



    /**
     * @OA\Get(
     * path="/api/role/{id}",
     * summary="Get Role by id",
     * description="Show one Role by id",
     * operationId="getOneRoles",
     * tags={"role"},
     * @OA\Parameter(
     *    description="ID of role",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when role id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Role is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="guard_name", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Role $role)
    {
        return $role;
    }

    /**
     * @OA\Post (
     * path="/api/role",
     * summary="Create New Role",
     * description="Create One Role",
     * operationId="postOneRoles",
     * tags={"role"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Role fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="guard_name", type="text", example="1"),
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
     *    description="Returns when Role has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="guard_name", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $role = Role::create($request->all());
        return response()->json($role, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/role/{id}",
     * summary="Edit one Role by id",
     * description="update One Role by id",
     * operationId="postOneRoles",
     * tags={"role"},
     * @OA\Parameter(
     *    description="ID of role",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Role fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="guard_name", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Role has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="guard_name", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Role $role)
    {
        $role->update($request->all());

        return response()->json($role, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/role/{id}",
     * summary="delete Role by id",
     * description="delete one Role by id",
     * operationId="deleteOneRoles",
     * tags={"role"},
     * @OA\Parameter(
     *    description="ID of role",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when role id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Roles are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="guard_name", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Role $role)
    {
        $role->delete();

        return response()->json($role, 200);
    }
}