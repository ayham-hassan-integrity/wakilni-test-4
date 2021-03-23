<?php

namespace App\Domains\Driver\Http\Controllers\Api\Driver;

use App\Http\Controllers\Controller;
use App\Domains\Driver\Models\Driver;
use Illuminate\Http\Request;

/**
 * Class DriverController.
 */
class DriverController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/driver",
     * summary="Get All Drivers",
     * description="Show All Drivers",
     * operationId="getAllDrivers",
     * tags={"Driver"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Driver are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="nationality", type="text", example="1"),
     *       @OA\Property(property="color", type="text", example="1"),
     *       @OA\Property(property="has_gps", type="Integer", example="1"),
     *       @OA\Property(property="has_internet", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="now_driving", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
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
        return Driver::all();
    }



    /**
     * @OA\Get(
     * path="/api/driver/{id}",
     * summary="Get Driver by id",
     * description="Show one Driver by id",
     * operationId="getOneDrivers",
     * tags={"driver"},
     * @OA\Parameter(
     *    description="ID of driver",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when driver id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Driver is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="nationality", type="text", example="1"),
     *       @OA\Property(property="color", type="text", example="1"),
     *       @OA\Property(property="has_gps", type="Integer", example="1"),
     *       @OA\Property(property="has_internet", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="now_driving", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Driver $driver)
    {
        return $driver;
    }

    /**
     * @OA\Post (
     * path="/api/driver",
     * summary="Create New Driver",
     * description="Create One Driver",
     * operationId="postOneDrivers",
     * tags={"driver"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Driver fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="nationality", type="text", example="1"),
     *       @OA\Property(property="color", type="text", example="1"),
     *       @OA\Property(property="has_gps", type="Integer", example="1"),
     *       @OA\Property(property="has_internet", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="now_driving", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
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
     *    description="Returns when Driver has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="nationality", type="text", example="1"),
     *       @OA\Property(property="color", type="text", example="1"),
     *       @OA\Property(property="has_gps", type="Integer", example="1"),
     *       @OA\Property(property="has_internet", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="now_driving", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $driver = Driver::create($request->all());
        return response()->json($driver, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/driver/{id}",
     * summary="Edit one Driver by id",
     * description="update One Driver by id",
     * operationId="postOneDrivers",
     * tags={"driver"},
     * @OA\Parameter(
     *    description="ID of driver",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Driver fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="nationality", type="text", example="1"),
     *       @OA\Property(property="color", type="text", example="1"),
     *       @OA\Property(property="has_gps", type="Integer", example="1"),
     *       @OA\Property(property="has_internet", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="now_driving", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Driver has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="nationality", type="text", example="1"),
     *       @OA\Property(property="color", type="text", example="1"),
     *       @OA\Property(property="has_gps", type="Integer", example="1"),
     *       @OA\Property(property="has_internet", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="now_driving", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Driver $driver)
    {
        $driver->update($request->all());

        return response()->json($driver, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/driver/{id}",
     * summary="delete Driver by id",
     * description="delete one Driver by id",
     * operationId="deleteOneDrivers",
     * tags={"driver"},
     * @OA\Parameter(
     *    description="ID of driver",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when driver id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Drivers are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="nationality", type="text", example="1"),
     *       @OA\Property(property="color", type="text", example="1"),
     *       @OA\Property(property="has_gps", type="Integer", example="1"),
     *       @OA\Property(property="has_internet", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="now_driving", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Driver $driver)
    {
        $driver->delete();

        return response()->json($driver, 200);
    }
}