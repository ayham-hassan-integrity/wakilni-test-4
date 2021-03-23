<?php

namespace App\Domains\AppToken\Http\Controllers\Api\Apptoken;

use App\Http\Controllers\Controller;
use App\Domains\AppToken\Models\Apptoken;
use Illuminate\Http\Request;

/**
 * Class ApptokenController.
 */
class ApptokenController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/apptoken",
     * summary="Get All Apptokens",
     * description="Show All Apptokens",
     * operationId="getAllApptokens",
     * tags={"Apptoken"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Apptoken are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="shop", type="text", example="1"),
     *       @OA\Property(property="access_token", type="text", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="app_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="code", type="text", example="1"),
     *       @OA\Property(property="authenticated", type="Integer", example="1"),
     *       @OA\Property(property="remember_token", type="text", example="1"),
     *       @OA\Property(property="country_code", type="text", example="1"),
     *       @OA\Property(property="extra", type="text", example="1"),
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
        return Apptoken::all();
    }



    /**
     * @OA\Get(
     * path="/api/apptoken/{id}",
     * summary="Get Apptoken by id",
     * description="Show one Apptoken by id",
     * operationId="getOneApptokens",
     * tags={"apptoken"},
     * @OA\Parameter(
     *    description="ID of apptoken",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when apptoken id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Apptoken is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="shop", type="text", example="1"),
     *       @OA\Property(property="access_token", type="text", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="app_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="code", type="text", example="1"),
     *       @OA\Property(property="authenticated", type="Integer", example="1"),
     *       @OA\Property(property="remember_token", type="text", example="1"),
     *       @OA\Property(property="country_code", type="text", example="1"),
     *       @OA\Property(property="extra", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Apptoken $apptoken)
    {
        return $apptoken;
    }

    /**
     * @OA\Post (
     * path="/api/apptoken",
     * summary="Create New Apptoken",
     * description="Create One Apptoken",
     * operationId="postOneApptokens",
     * tags={"apptoken"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Apptoken fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="shop", type="text", example="1"),
     *       @OA\Property(property="access_token", type="text", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="app_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="code", type="text", example="1"),
     *       @OA\Property(property="authenticated", type="Integer", example="1"),
     *       @OA\Property(property="remember_token", type="text", example="1"),
     *       @OA\Property(property="country_code", type="text", example="1"),
     *       @OA\Property(property="extra", type="text", example="1"),
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
     *    description="Returns when Apptoken has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="shop", type="text", example="1"),
     *       @OA\Property(property="access_token", type="text", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="app_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="code", type="text", example="1"),
     *       @OA\Property(property="authenticated", type="Integer", example="1"),
     *       @OA\Property(property="remember_token", type="text", example="1"),
     *       @OA\Property(property="country_code", type="text", example="1"),
     *       @OA\Property(property="extra", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $apptoken = Apptoken::create($request->all());
        return response()->json($apptoken, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/apptoken/{id}",
     * summary="Edit one Apptoken by id",
     * description="update One Apptoken by id",
     * operationId="postOneApptokens",
     * tags={"apptoken"},
     * @OA\Parameter(
     *    description="ID of apptoken",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Apptoken fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="shop", type="text", example="1"),
     *       @OA\Property(property="access_token", type="text", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="app_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="code", type="text", example="1"),
     *       @OA\Property(property="authenticated", type="Integer", example="1"),
     *       @OA\Property(property="remember_token", type="text", example="1"),
     *       @OA\Property(property="country_code", type="text", example="1"),
     *       @OA\Property(property="extra", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Apptoken has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="shop", type="text", example="1"),
     *       @OA\Property(property="access_token", type="text", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="app_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="code", type="text", example="1"),
     *       @OA\Property(property="authenticated", type="Integer", example="1"),
     *       @OA\Property(property="remember_token", type="text", example="1"),
     *       @OA\Property(property="country_code", type="text", example="1"),
     *       @OA\Property(property="extra", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Apptoken $apptoken)
    {
        $apptoken->update($request->all());

        return response()->json($apptoken, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/apptoken/{id}",
     * summary="delete Apptoken by id",
     * description="delete one Apptoken by id",
     * operationId="deleteOneApptokens",
     * tags={"apptoken"},
     * @OA\Parameter(
     *    description="ID of apptoken",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when apptoken id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Apptokens are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="shop", type="text", example="1"),
     *       @OA\Property(property="access_token", type="text", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="app_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="code", type="text", example="1"),
     *       @OA\Property(property="authenticated", type="Integer", example="1"),
     *       @OA\Property(property="remember_token", type="text", example="1"),
     *       @OA\Property(property="country_code", type="text", example="1"),
     *       @OA\Property(property="extra", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Apptoken $apptoken)
    {
        $apptoken->delete();

        return response()->json($apptoken, 200);
    }
}