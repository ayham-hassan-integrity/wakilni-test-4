<?php

namespace App\Domains\Zone\Http\Controllers\Api\Zone;

use App\Http\Controllers\Controller;
use App\Domains\Zone\Models\Zone;
use Illuminate\Http\Request;

/**
 * Class ZoneController.
 */
class ZoneController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/zone",
     * summary="Get All Zones",
     * description="Show All Zones",
     * operationId="getAllZones",
     * tags={"Zone"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Zone are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="description", type="text", example="1"),
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
        return Zone::all();
    }



    /**
     * @OA\Get(
     * path="/api/zone/{id}",
     * summary="Get Zone by id",
     * description="Show one Zone by id",
     * operationId="getOneZones",
     * tags={"zone"},
     * @OA\Parameter(
     *    description="ID of zone",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when zone id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Zone is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="description", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Zone $zone)
    {
        return $zone;
    }

    /**
     * @OA\Post (
     * path="/api/zone",
     * summary="Create New Zone",
     * description="Create One Zone",
     * operationId="postOneZones",
     * tags={"zone"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Zone fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="description", type="text", example="1"),
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
     *    description="Returns when Zone has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="description", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $zone = Zone::create($request->all());
        return response()->json($zone, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/zone/{id}",
     * summary="Edit one Zone by id",
     * description="update One Zone by id",
     * operationId="postOneZones",
     * tags={"zone"},
     * @OA\Parameter(
     *    description="ID of zone",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Zone fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="description", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Zone has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="description", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Zone $zone)
    {
        $zone->update($request->all());

        return response()->json($zone, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/zone/{id}",
     * summary="delete Zone by id",
     * description="delete one Zone by id",
     * operationId="deleteOneZones",
     * tags={"zone"},
     * @OA\Parameter(
     *    description="ID of zone",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when zone id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Zones are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="description", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Zone $zone)
    {
        $zone->delete();

        return response()->json($zone, 200);
    }
}