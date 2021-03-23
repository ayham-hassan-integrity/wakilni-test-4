<?php

namespace App\Domains\DriverVehicle\Http\Controllers\Api\Drivervehicle;

use App\Http\Controllers\Controller;
use App\Domains\DriverVehicle\Models\Drivervehicle;
use Illuminate\Http\Request;

/**
 * Class DrivervehicleController.
 */
class DrivervehicleController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/drivervehicle",
     * summary="Get All Drivervehicles",
     * description="Show All Drivervehicles",
     * operationId="getAllDrivervehicles",
     * tags={"Drivervehicle"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Drivervehicle are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="vehicle_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
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
        return Drivervehicle::all();
    }



    /**
     * @OA\Get(
     * path="/api/drivervehicle/{id}",
     * summary="Get Drivervehicle by id",
     * description="Show one Drivervehicle by id",
     * operationId="getOneDrivervehicles",
     * tags={"drivervehicle"},
     * @OA\Parameter(
     *    description="ID of drivervehicle",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when drivervehicle id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Drivervehicle is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="vehicle_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Drivervehicle $drivervehicle)
    {
        return $drivervehicle;
    }

    /**
     * @OA\Post (
     * path="/api/drivervehicle",
     * summary="Create New Drivervehicle",
     * description="Create One Drivervehicle",
     * operationId="postOneDrivervehicles",
     * tags={"drivervehicle"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Drivervehicle fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="vehicle_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
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
     *    description="Returns when Drivervehicle has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="vehicle_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $drivervehicle = Drivervehicle::create($request->all());
        return response()->json($drivervehicle, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/drivervehicle/{id}",
     * summary="Edit one Drivervehicle by id",
     * description="update One Drivervehicle by id",
     * operationId="postOneDrivervehicles",
     * tags={"drivervehicle"},
     * @OA\Parameter(
     *    description="ID of drivervehicle",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Drivervehicle fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="vehicle_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Drivervehicle has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="vehicle_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Drivervehicle $drivervehicle)
    {
        $drivervehicle->update($request->all());

        return response()->json($drivervehicle, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/drivervehicle/{id}",
     * summary="delete Drivervehicle by id",
     * description="delete one Drivervehicle by id",
     * operationId="deleteOneDrivervehicles",
     * tags={"drivervehicle"},
     * @OA\Parameter(
     *    description="ID of drivervehicle",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when drivervehicle id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Drivervehicles are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="vehicle_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Drivervehicle $drivervehicle)
    {
        $drivervehicle->delete();

        return response()->json($drivervehicle, 200);
    }
}