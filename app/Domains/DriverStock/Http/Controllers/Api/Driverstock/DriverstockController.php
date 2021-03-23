<?php

namespace App\Domains\DriverStock\Http\Controllers\Api\Driverstock;

use App\Http\Controllers\Controller;
use App\Domains\DriverStock\Models\Driverstock;
use Illuminate\Http\Request;

/**
 * Class DriverstockController.
 */
class DriverstockController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/driverstock",
     * summary="Get All Driverstocks",
     * description="Show All Driverstocks",
     * operationId="getAllDriverstocks",
     * tags={"Driverstock"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Driverstock are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="stock_id", type="Integer", example="1"),
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
        return Driverstock::all();
    }



    /**
     * @OA\Get(
     * path="/api/driverstock/{id}",
     * summary="Get Driverstock by id",
     * description="Show one Driverstock by id",
     * operationId="getOneDriverstocks",
     * tags={"driverstock"},
     * @OA\Parameter(
     *    description="ID of driverstock",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when driverstock id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Driverstock is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="stock_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Driverstock $driverstock)
    {
        return $driverstock;
    }

    /**
     * @OA\Post (
     * path="/api/driverstock",
     * summary="Create New Driverstock",
     * description="Create One Driverstock",
     * operationId="postOneDriverstocks",
     * tags={"driverstock"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Driverstock fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="stock_id", type="Integer", example="1"),
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
     *    description="Returns when Driverstock has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="stock_id", type="Integer", example="1"),
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
        $driverstock = Driverstock::create($request->all());
        return response()->json($driverstock, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/driverstock/{id}",
     * summary="Edit one Driverstock by id",
     * description="update One Driverstock by id",
     * operationId="postOneDriverstocks",
     * tags={"driverstock"},
     * @OA\Parameter(
     *    description="ID of driverstock",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Driverstock fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="stock_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Driverstock has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="stock_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Driverstock $driverstock)
    {
        $driverstock->update($request->all());

        return response()->json($driverstock, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/driverstock/{id}",
     * summary="delete Driverstock by id",
     * description="delete one Driverstock by id",
     * operationId="deleteOneDriverstocks",
     * tags={"driverstock"},
     * @OA\Parameter(
     *    description="ID of driverstock",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when driverstock id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Driverstocks are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="stock_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Driverstock $driverstock)
    {
        $driverstock->delete();

        return response()->json($driverstock, 200);
    }
}