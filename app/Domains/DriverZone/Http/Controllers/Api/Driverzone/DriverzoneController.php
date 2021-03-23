<?php

namespace App\Domains\DriverZone\Http\Controllers\Api\Driverzone;

use App\Http\Controllers\Controller;
use App\Domains\DriverZone\Models\Driverzone;
use Illuminate\Http\Request;

/**
 * Class DriverzoneController.
 */
class DriverzoneController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/driverzone",
     * summary="Get All Driverzones",
     * description="Show All Driverzones",
     * operationId="getAllDriverzones",
     * tags={"Driverzone"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Driverzone are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="zone_id", type="Integer", example="1"),
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
        return Driverzone::all();
    }



    /**
     * @OA\Get(
     * path="/api/driverzone/{id}",
     * summary="Get Driverzone by id",
     * description="Show one Driverzone by id",
     * operationId="getOneDriverzones",
     * tags={"driverzone"},
     * @OA\Parameter(
     *    description="ID of driverzone",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when driverzone id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Driverzone is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="zone_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Driverzone $driverzone)
    {
        return $driverzone;
    }

    /**
     * @OA\Post (
     * path="/api/driverzone",
     * summary="Create New Driverzone",
     * description="Create One Driverzone",
     * operationId="postOneDriverzones",
     * tags={"driverzone"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Driverzone fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="zone_id", type="Integer", example="1"),
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
     *    description="Returns when Driverzone has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="zone_id", type="Integer", example="1"),
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
        $driverzone = Driverzone::create($request->all());
        return response()->json($driverzone, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/driverzone/{id}",
     * summary="Edit one Driverzone by id",
     * description="update One Driverzone by id",
     * operationId="postOneDriverzones",
     * tags={"driverzone"},
     * @OA\Parameter(
     *    description="ID of driverzone",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Driverzone fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="zone_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Driverzone has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="zone_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Driverzone $driverzone)
    {
        $driverzone->update($request->all());

        return response()->json($driverzone, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/driverzone/{id}",
     * summary="delete Driverzone by id",
     * description="delete one Driverzone by id",
     * operationId="deleteOneDriverzones",
     * tags={"driverzone"},
     * @OA\Parameter(
     *    description="ID of driverzone",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when driverzone id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Driverzones are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="zone_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Driverzone $driverzone)
    {
        $driverzone->delete();

        return response()->json($driverzone, 200);
    }
}