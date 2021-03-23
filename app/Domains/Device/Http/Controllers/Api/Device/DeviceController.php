<?php

namespace App\Domains\Device\Http\Controllers\Api\Device;

use App\Http\Controllers\Controller;
use App\Domains\Device\Models\Device;
use Illuminate\Http\Request;

/**
 * Class DeviceController.
 */
class DeviceController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/device",
     * summary="Get All Devices",
     * description="Show All Devices",
     * operationId="getAllDevices",
     * tags={"Device"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Device are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="type", type="Integer", example="1"),
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
        return Device::all();
    }



    /**
     * @OA\Get(
     * path="/api/device/{id}",
     * summary="Get Device by id",
     * description="Show one Device by id",
     * operationId="getOneDevices",
     * tags={"device"},
     * @OA\Parameter(
     *    description="ID of device",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when device id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Device is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="type", type="Integer", example="1"),
     *       @OA\Property(property="token", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Device $device)
    {
        return $device;
    }

    /**
     * @OA\Post (
     * path="/api/device",
     * summary="Create New Device",
     * description="Create One Device",
     * operationId="postOneDevices",
     * tags={"device"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Device fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="type", type="Integer", example="1"),
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
     *    description="Returns when Device has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="type", type="Integer", example="1"),
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
        $device = Device::create($request->all());
        return response()->json($device, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/device/{id}",
     * summary="Edit one Device by id",
     * description="update One Device by id",
     * operationId="postOneDevices",
     * tags={"device"},
     * @OA\Parameter(
     *    description="ID of device",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Device fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="type", type="Integer", example="1"),
     *       @OA\Property(property="token", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Device has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="type", type="Integer", example="1"),
     *       @OA\Property(property="token", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Device $device)
    {
        $device->update($request->all());

        return response()->json($device, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/device/{id}",
     * summary="delete Device by id",
     * description="delete one Device by id",
     * operationId="deleteOneDevices",
     * tags={"device"},
     * @OA\Parameter(
     *    description="ID of device",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when device id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Devices are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="type", type="Integer", example="1"),
     *       @OA\Property(property="token", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Device $device)
    {
        $device->delete();

        return response()->json($device, 200);
    }
}