<?php

namespace App\Domains\User\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Domains\User\Models\User;
use Illuminate\Http\Request;

/**
 * Class UserController.
 */
class UserController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/user",
     * summary="Get All Users",
     * description="Show All Users",
     * operationId="getAllUsers",
     * tags={"User"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when User are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="password", type="text", example="1"),
     *       @OA\Property(property="pattern", type="text", example="1"),
     *       @OA\Property(property="start_date", type="datetime", example="1"),
     *       @OA\Property(property="office_id", type="Integer", example="1"),
     *       @OA\Property(property="remember_token", type="text", example="1"),
     *       @OA\Property(property="contact_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="last_login", type="datetime", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="language_type", type="Integer", example="1"),
     *       @OA\Property(property="time_zone", type="text", example="1"),
     *       @OA\Property(property="provider_name", type="text", example="1"),
     *       @OA\Property(property="provider_token", type="text", example="1"),
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
        return User::all();
    }



    /**
     * @OA\Get(
     * path="/api/user/{id}",
     * summary="Get User by id",
     * description="Show one User by id",
     * operationId="getOneUsers",
     * tags={"user"},
     * @OA\Parameter(
     *    description="ID of user",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when user id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when User is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="password", type="text", example="1"),
     *       @OA\Property(property="pattern", type="text", example="1"),
     *       @OA\Property(property="start_date", type="datetime", example="1"),
     *       @OA\Property(property="office_id", type="Integer", example="1"),
     *       @OA\Property(property="remember_token", type="text", example="1"),
     *       @OA\Property(property="contact_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="last_login", type="datetime", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="language_type", type="Integer", example="1"),
     *       @OA\Property(property="time_zone", type="text", example="1"),
     *       @OA\Property(property="provider_name", type="text", example="1"),
     *       @OA\Property(property="provider_token", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * @OA\Post (
     * path="/api/user",
     * summary="Create New User",
     * description="Create One User",
     * operationId="postOneUsers",
     * tags={"user"},
     * @OA\RequestBody(
     *    required=true,
     *    description="User fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="password", type="text", example="1"),
     *       @OA\Property(property="pattern", type="text", example="1"),
     *       @OA\Property(property="start_date", type="datetime", example="1"),
     *       @OA\Property(property="office_id", type="Integer", example="1"),
     *       @OA\Property(property="remember_token", type="text", example="1"),
     *       @OA\Property(property="contact_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="last_login", type="datetime", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="language_type", type="Integer", example="1"),
     *       @OA\Property(property="time_zone", type="text", example="1"),
     *       @OA\Property(property="provider_name", type="text", example="1"),
     *       @OA\Property(property="provider_token", type="text", example="1"),
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
     *    description="Returns when User has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="password", type="text", example="1"),
     *       @OA\Property(property="pattern", type="text", example="1"),
     *       @OA\Property(property="start_date", type="datetime", example="1"),
     *       @OA\Property(property="office_id", type="Integer", example="1"),
     *       @OA\Property(property="remember_token", type="text", example="1"),
     *       @OA\Property(property="contact_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="last_login", type="datetime", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="language_type", type="Integer", example="1"),
     *       @OA\Property(property="time_zone", type="text", example="1"),
     *       @OA\Property(property="provider_name", type="text", example="1"),
     *       @OA\Property(property="provider_token", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/user/{id}",
     * summary="Edit one User by id",
     * description="update One User by id",
     * operationId="postOneUsers",
     * tags={"user"},
     * @OA\Parameter(
     *    description="ID of user",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="User fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="password", type="text", example="1"),
     *       @OA\Property(property="pattern", type="text", example="1"),
     *       @OA\Property(property="start_date", type="datetime", example="1"),
     *       @OA\Property(property="office_id", type="Integer", example="1"),
     *       @OA\Property(property="remember_token", type="text", example="1"),
     *       @OA\Property(property="contact_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="last_login", type="datetime", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="language_type", type="Integer", example="1"),
     *       @OA\Property(property="time_zone", type="text", example="1"),
     *       @OA\Property(property="provider_name", type="text", example="1"),
     *       @OA\Property(property="provider_token", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when User has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="password", type="text", example="1"),
     *       @OA\Property(property="pattern", type="text", example="1"),
     *       @OA\Property(property="start_date", type="datetime", example="1"),
     *       @OA\Property(property="office_id", type="Integer", example="1"),
     *       @OA\Property(property="remember_token", type="text", example="1"),
     *       @OA\Property(property="contact_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="last_login", type="datetime", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="language_type", type="Integer", example="1"),
     *       @OA\Property(property="time_zone", type="text", example="1"),
     *       @OA\Property(property="provider_name", type="text", example="1"),
     *       @OA\Property(property="provider_token", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return response()->json($user, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/user/{id}",
     * summary="delete User by id",
     * description="delete one User by id",
     * operationId="deleteOneUsers",
     * tags={"user"},
     * @OA\Parameter(
     *    description="ID of user",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when user id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Users are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="password", type="text", example="1"),
     *       @OA\Property(property="pattern", type="text", example="1"),
     *       @OA\Property(property="start_date", type="datetime", example="1"),
     *       @OA\Property(property="office_id", type="Integer", example="1"),
     *       @OA\Property(property="remember_token", type="text", example="1"),
     *       @OA\Property(property="contact_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="last_login", type="datetime", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="language_type", type="Integer", example="1"),
     *       @OA\Property(property="time_zone", type="text", example="1"),
     *       @OA\Property(property="provider_name", type="text", example="1"),
     *       @OA\Property(property="provider_token", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(User $user)
    {
        $user->delete();

        return response()->json($user, 200);
    }
}