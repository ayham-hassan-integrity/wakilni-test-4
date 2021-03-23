<?php

namespace App\Domains\Vehicle\Http\Controllers\Api\Vehicle;

use App\Http\Controllers\Controller;
use App\Domains\Vehicle\Models\Vehicle;
use Illuminate\Http\Request;

/**
 * Class VehicleController.
 */
class VehicleController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/vehicle",
     * summary="Get All Vehicles",
     * description="Show All Vehicles",
     * operationId="getAllVehicles",
     * tags={"Vehicle"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Vehicle are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="count", type="Integer", example="1"),
     *       @OA\Property(property="remaining", type="Integer", example="1"),
     *       @OA\Property(property="maintenance", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
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
        return Vehicle::all();
    }



    /**
     * @OA\Get(
     * path="/api/vehicle/{id}",
     * summary="Get Vehicle by id",
     * description="Show one Vehicle by id",
     * operationId="getOneVehicles",
     * tags={"vehicle"},
     * @OA\Parameter(
     *    description="ID of vehicle",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when vehicle id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Vehicle is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="count", type="Integer", example="1"),
     *       @OA\Property(property="remaining", type="Integer", example="1"),
     *       @OA\Property(property="maintenance", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Vehicle $vehicle)
    {
        return $vehicle;
    }

    /**
     * @OA\Post (
     * path="/api/vehicle",
     * summary="Create New Vehicle",
     * description="Create One Vehicle",
     * operationId="postOneVehicles",
     * tags={"vehicle"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Vehicle fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="count", type="Integer", example="1"),
     *       @OA\Property(property="remaining", type="Integer", example="1"),
     *       @OA\Property(property="maintenance", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
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
     *    description="Returns when Vehicle has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="count", type="Integer", example="1"),
     *       @OA\Property(property="remaining", type="Integer", example="1"),
     *       @OA\Property(property="maintenance", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $vehicle = Vehicle::create($request->all());
        return response()->json($vehicle, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/vehicle/{id}",
     * summary="Edit one Vehicle by id",
     * description="update One Vehicle by id",
     * operationId="postOneVehicles",
     * tags={"vehicle"},
     * @OA\Parameter(
     *    description="ID of vehicle",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Vehicle fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="count", type="Integer", example="1"),
     *       @OA\Property(property="remaining", type="Integer", example="1"),
     *       @OA\Property(property="maintenance", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Vehicle has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="count", type="Integer", example="1"),
     *       @OA\Property(property="remaining", type="Integer", example="1"),
     *       @OA\Property(property="maintenance", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle->update($request->all());

        return response()->json($vehicle, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/vehicle/{id}",
     * summary="delete Vehicle by id",
     * description="delete one Vehicle by id",
     * operationId="deleteOneVehicles",
     * tags={"vehicle"},
     * @OA\Parameter(
     *    description="ID of vehicle",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when vehicle id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Vehicles are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="count", type="Integer", example="1"),
     *       @OA\Property(property="remaining", type="Integer", example="1"),
     *       @OA\Property(property="maintenance", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Vehicle $vehicle)
    {
        $vehicle->delete();

        return response()->json($vehicle, 200);
    }
}