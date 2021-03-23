<?php

namespace App\Domains\TelescopeMonitoring\Http\Controllers\Api\Telescopemonitoring;

use App\Http\Controllers\Controller;
use App\Domains\TelescopeMonitoring\Models\Telescopemonitoring;
use Illuminate\Http\Request;

/**
 * Class TelescopemonitoringController.
 */
class TelescopemonitoringController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/telescopemonitoring",
     * summary="Get All Telescopemonitorings",
     * description="Show All Telescopemonitorings",
     * operationId="getAllTelescopemonitorings",
     * tags={"Telescopemonitoring"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Telescopemonitoring are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="tag", type="text", example="1"),
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
        return Telescopemonitoring::all();
    }



    /**
     * @OA\Get(
     * path="/api/telescopemonitoring/{id}",
     * summary="Get Telescopemonitoring by id",
     * description="Show one Telescopemonitoring by id",
     * operationId="getOneTelescopemonitorings",
     * tags={"telescopemonitoring"},
     * @OA\Parameter(
     *    description="ID of telescopemonitoring",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when telescopemonitoring id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Telescopemonitoring is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="tag", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Telescopemonitoring $telescopemonitoring)
    {
        return $telescopemonitoring;
    }

    /**
     * @OA\Post (
     * path="/api/telescopemonitoring",
     * summary="Create New Telescopemonitoring",
     * description="Create One Telescopemonitoring",
     * operationId="postOneTelescopemonitorings",
     * tags={"telescopemonitoring"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Telescopemonitoring fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="tag", type="text", example="1"),
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
     *    description="Returns when Telescopemonitoring has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="tag", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $telescopemonitoring = Telescopemonitoring::create($request->all());
        return response()->json($telescopemonitoring, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/telescopemonitoring/{id}",
     * summary="Edit one Telescopemonitoring by id",
     * description="update One Telescopemonitoring by id",
     * operationId="postOneTelescopemonitorings",
     * tags={"telescopemonitoring"},
     * @OA\Parameter(
     *    description="ID of telescopemonitoring",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Telescopemonitoring fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="tag", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Telescopemonitoring has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="tag", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Telescopemonitoring $telescopemonitoring)
    {
        $telescopemonitoring->update($request->all());

        return response()->json($telescopemonitoring, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/telescopemonitoring/{id}",
     * summary="delete Telescopemonitoring by id",
     * description="delete one Telescopemonitoring by id",
     * operationId="deleteOneTelescopemonitorings",
     * tags={"telescopemonitoring"},
     * @OA\Parameter(
     *    description="ID of telescopemonitoring",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when telescopemonitoring id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Telescopemonitorings are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="tag", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Telescopemonitoring $telescopemonitoring)
    {
        $telescopemonitoring->delete();

        return response()->json($telescopemonitoring, 200);
    }
}