<?php

namespace App\Domains\Package\Http\Controllers\Api\Package;

use App\Http\Controllers\Controller;
use App\Domains\Package\Models\Package;
use Illuminate\Http\Request;

/**
 * Class PackageController.
 */
class PackageController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/package",
     * summary="Get All Packages",
     * description="Show All Packages",
     * operationId="getAllPackages",
     * tags={"Package"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Package are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="quantity", type="Integer", example="1"),
     *       @OA\Property(property="trip_number", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="order_details_id", type="Integer", example="1"),
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
        return Package::all();
    }



    /**
     * @OA\Get(
     * path="/api/package/{id}",
     * summary="Get Package by id",
     * description="Show one Package by id",
     * operationId="getOnePackages",
     * tags={"package"},
     * @OA\Parameter(
     *    description="ID of package",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when package id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Package is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="quantity", type="Integer", example="1"),
     *       @OA\Property(property="trip_number", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="order_details_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Package $package)
    {
        return $package;
    }

    /**
     * @OA\Post (
     * path="/api/package",
     * summary="Create New Package",
     * description="Create One Package",
     * operationId="postOnePackages",
     * tags={"package"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Package fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="quantity", type="Integer", example="1"),
     *       @OA\Property(property="trip_number", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="order_details_id", type="Integer", example="1"),
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
     *    description="Returns when Package has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="quantity", type="Integer", example="1"),
     *       @OA\Property(property="trip_number", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="order_details_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $package = Package::create($request->all());
        return response()->json($package, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/package/{id}",
     * summary="Edit one Package by id",
     * description="update One Package by id",
     * operationId="postOnePackages",
     * tags={"package"},
     * @OA\Parameter(
     *    description="ID of package",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Package fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="quantity", type="Integer", example="1"),
     *       @OA\Property(property="trip_number", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="order_details_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Package has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="quantity", type="Integer", example="1"),
     *       @OA\Property(property="trip_number", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="order_details_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Package $package)
    {
        $package->update($request->all());

        return response()->json($package, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/package/{id}",
     * summary="delete Package by id",
     * description="delete one Package by id",
     * operationId="deleteOnePackages",
     * tags={"package"},
     * @OA\Parameter(
     *    description="ID of package",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when package id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Packages are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="quantity", type="Integer", example="1"),
     *       @OA\Property(property="trip_number", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="order_details_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Package $package)
    {
        $package->delete();

        return response()->json($package, 200);
    }
}