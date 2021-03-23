<?php

namespace App\Domains\Route\Http\Controllers\Api\Route;

use App\Http\Controllers\Controller;
use App\Domains\Route\Models\Route;
use Illuminate\Http\Request;

/**
 * Class RouteController.
 */
class RouteController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/route",
     * summary="Get All Routes",
     * description="Show All Routes",
     * operationId="getAllRoutes",
     * tags={"Route"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Route are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="route", type="longtext", example="1"),
     *       @OA\Property(property="km/day", type="Integer", example="1"),
     *       @OA\Property(property="today", type="date", example="1"),
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
        return Route::all();
    }



    /**
     * @OA\Get(
     * path="/api/route/{id}",
     * summary="Get Route by id",
     * description="Show one Route by id",
     * operationId="getOneRoutes",
     * tags={"route"},
     * @OA\Parameter(
     *    description="ID of route",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when route id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Route is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="route", type="longtext", example="1"),
     *       @OA\Property(property="km/day", type="Integer", example="1"),
     *       @OA\Property(property="today", type="date", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Route $route)
    {
        return $route;
    }

    /**
     * @OA\Post (
     * path="/api/route",
     * summary="Create New Route",
     * description="Create One Route",
     * operationId="postOneRoutes",
     * tags={"route"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Route fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="route", type="longtext", example="1"),
     *       @OA\Property(property="km/day", type="Integer", example="1"),
     *       @OA\Property(property="today", type="date", example="1"),
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
     *    description="Returns when Route has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="route", type="longtext", example="1"),
     *       @OA\Property(property="km/day", type="Integer", example="1"),
     *       @OA\Property(property="today", type="date", example="1"),
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
        $route = Route::create($request->all());
        return response()->json($route, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/route/{id}",
     * summary="Edit one Route by id",
     * description="update One Route by id",
     * operationId="postOneRoutes",
     * tags={"route"},
     * @OA\Parameter(
     *    description="ID of route",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Route fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="route", type="longtext", example="1"),
     *       @OA\Property(property="km/day", type="Integer", example="1"),
     *       @OA\Property(property="today", type="date", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Route has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="route", type="longtext", example="1"),
     *       @OA\Property(property="km/day", type="Integer", example="1"),
     *       @OA\Property(property="today", type="date", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Route $route)
    {
        $route->update($request->all());

        return response()->json($route, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/route/{id}",
     * summary="delete Route by id",
     * description="delete one Route by id",
     * operationId="deleteOneRoutes",
     * tags={"route"},
     * @OA\Parameter(
     *    description="ID of route",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when route id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Routes are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="route", type="longtext", example="1"),
     *       @OA\Property(property="km/day", type="Integer", example="1"),
     *       @OA\Property(property="today", type="date", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Route $route)
    {
        $route->delete();

        return response()->json($route, 200);
    }
}