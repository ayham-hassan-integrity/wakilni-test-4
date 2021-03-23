<?php

namespace App\Domains\PasswordReset\Http\Controllers\Api\Passwordreset;

use App\Http\Controllers\Controller;
use App\Domains\PasswordReset\Models\Passwordreset;
use Illuminate\Http\Request;

/**
 * Class PasswordresetController.
 */
class PasswordresetController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/passwordreset",
     * summary="Get All Passwordresets",
     * description="Show All Passwordresets",
     * operationId="getAllPasswordresets",
     * tags={"Passwordreset"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Passwordreset are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="token", type="text", example="1"),
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
        return Passwordreset::all();
    }



    /**
     * @OA\Get(
     * path="/api/passwordreset/{id}",
     * summary="Get Passwordreset by id",
     * description="Show one Passwordreset by id",
     * operationId="getOnePasswordresets",
     * tags={"passwordreset"},
     * @OA\Parameter(
     *    description="ID of passwordreset",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when passwordreset id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Passwordreset is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="token", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Passwordreset $passwordreset)
    {
        return $passwordreset;
    }

    /**
     * @OA\Post (
     * path="/api/passwordreset",
     * summary="Create New Passwordreset",
     * description="Create One Passwordreset",
     * operationId="postOnePasswordresets",
     * tags={"passwordreset"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Passwordreset fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="token", type="text", example="1"),
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
     *    description="Returns when Passwordreset has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="token", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $passwordreset = Passwordreset::create($request->all());
        return response()->json($passwordreset, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/passwordreset/{id}",
     * summary="Edit one Passwordreset by id",
     * description="update One Passwordreset by id",
     * operationId="postOnePasswordresets",
     * tags={"passwordreset"},
     * @OA\Parameter(
     *    description="ID of passwordreset",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Passwordreset fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="token", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Passwordreset has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="token", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Passwordreset $passwordreset)
    {
        $passwordreset->update($request->all());

        return response()->json($passwordreset, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/passwordreset/{id}",
     * summary="delete Passwordreset by id",
     * description="delete one Passwordreset by id",
     * operationId="deleteOnePasswordresets",
     * tags={"passwordreset"},
     * @OA\Parameter(
     *    description="ID of passwordreset",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when passwordreset id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Passwordresets are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="token", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Passwordreset $passwordreset)
    {
        $passwordreset->delete();

        return response()->json($passwordreset, 200);
    }
}