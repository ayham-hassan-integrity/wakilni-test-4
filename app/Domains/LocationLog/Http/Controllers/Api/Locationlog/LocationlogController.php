<?php

namespace App\Domains\LocationLog\Http\Controllers\Api\Locationlog;

use App\Http\Controllers\Controller;
use App\Domains\LocationLog\Models\Locationlog;
use Illuminate\Http\Request;

/**
 * Class LocationlogController.
 */
class LocationlogController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/locationlog",
     * summary="Get All Locationlogs",
     * description="Show All Locationlogs",
     * operationId="getAllLocationlogs",
     * tags={"Locationlog"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Locationlog are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="data", type="longtext", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
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
        return Locationlog::all();
    }



    /**
     * @OA\Get(
     * path="/api/locationlog/{id}",
     * summary="Get Locationlog by id",
     * description="Show one Locationlog by id",
     * operationId="getOneLocationlogs",
     * tags={"locationlog"},
     * @OA\Parameter(
     *    description="ID of locationlog",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when locationlog id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Locationlog is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="data", type="longtext", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Locationlog $locationlog)
    {
        return $locationlog;
    }

    /**
     * @OA\Post (
     * path="/api/locationlog",
     * summary="Create New Locationlog",
     * description="Create One Locationlog",
     * operationId="postOneLocationlogs",
     * tags={"locationlog"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Locationlog fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="data", type="longtext", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
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
     *    description="Returns when Locationlog has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="data", type="longtext", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
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
        $locationlog = Locationlog::create($request->all());
        return response()->json($locationlog, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/locationlog/{id}",
     * summary="Edit one Locationlog by id",
     * description="update One Locationlog by id",
     * operationId="postOneLocationlogs",
     * tags={"locationlog"},
     * @OA\Parameter(
     *    description="ID of locationlog",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Locationlog fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="data", type="longtext", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Locationlog has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="data", type="longtext", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Locationlog $locationlog)
    {
        $locationlog->update($request->all());

        return response()->json($locationlog, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/locationlog/{id}",
     * summary="delete Locationlog by id",
     * description="delete one Locationlog by id",
     * operationId="deleteOneLocationlogs",
     * tags={"locationlog"},
     * @OA\Parameter(
     *    description="ID of locationlog",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when locationlog id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Locationlogs are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="data", type="longtext", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Locationlog $locationlog)
    {
        $locationlog->delete();

        return response()->json($locationlog, 200);
    }
}