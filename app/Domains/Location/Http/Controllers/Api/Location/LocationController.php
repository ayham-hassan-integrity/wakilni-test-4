<?php

namespace App\Domains\Location\Http\Controllers\Api\Location;

use App\Http\Controllers\Controller;
use App\Domains\Location\Models\Location;
use Illuminate\Http\Request;

/**
 * Class LocationController.
 */
class LocationController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/location",
     * summary="Get All Locations",
     * description="Show All Locations",
     * operationId="getAllLocations",
     * tags={"Location"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Location are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="building", type="text", example="1"),
     *       @OA\Property(property="floor", type="text", example="1"),
     *       @OA\Property(property="directions", type="longtext", example="1"),
     *       @OA\Property(property="longitude", type="decimal", example="1"),
     *       @OA\Property(property="latitude", type="decimal", example="1"),
     *       @OA\Property(property="area_id", type="Integer", example="1"),
     *       @OA\Property(property="personable_id", type="Integer", example="1"),
     *       @OA\Property(property="personable_type", type="text", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="image_id", type="Integer", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="voice", type="blob", example="1"),
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
        return Location::all();
    }



    /**
     * @OA\Get(
     * path="/api/location/{id}",
     * summary="Get Location by id",
     * description="Show one Location by id",
     * operationId="getOneLocations",
     * tags={"location"},
     * @OA\Parameter(
     *    description="ID of location",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when location id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Location is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="building", type="text", example="1"),
     *       @OA\Property(property="floor", type="text", example="1"),
     *       @OA\Property(property="directions", type="longtext", example="1"),
     *       @OA\Property(property="longitude", type="decimal", example="1"),
     *       @OA\Property(property="latitude", type="decimal", example="1"),
     *       @OA\Property(property="area_id", type="Integer", example="1"),
     *       @OA\Property(property="personable_id", type="Integer", example="1"),
     *       @OA\Property(property="personable_type", type="text", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="image_id", type="Integer", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="voice", type="blob", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Location $location)
    {
        return $location;
    }

    /**
     * @OA\Post (
     * path="/api/location",
     * summary="Create New Location",
     * description="Create One Location",
     * operationId="postOneLocations",
     * tags={"location"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Location fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="building", type="text", example="1"),
     *       @OA\Property(property="floor", type="text", example="1"),
     *       @OA\Property(property="directions", type="longtext", example="1"),
     *       @OA\Property(property="longitude", type="decimal", example="1"),
     *       @OA\Property(property="latitude", type="decimal", example="1"),
     *       @OA\Property(property="area_id", type="Integer", example="1"),
     *       @OA\Property(property="personable_id", type="Integer", example="1"),
     *       @OA\Property(property="personable_type", type="text", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="image_id", type="Integer", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="voice", type="blob", example="1"),
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
     *    description="Returns when Location has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="building", type="text", example="1"),
     *       @OA\Property(property="floor", type="text", example="1"),
     *       @OA\Property(property="directions", type="longtext", example="1"),
     *       @OA\Property(property="longitude", type="decimal", example="1"),
     *       @OA\Property(property="latitude", type="decimal", example="1"),
     *       @OA\Property(property="area_id", type="Integer", example="1"),
     *       @OA\Property(property="personable_id", type="Integer", example="1"),
     *       @OA\Property(property="personable_type", type="text", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="image_id", type="Integer", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="voice", type="blob", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $location = Location::create($request->all());
        return response()->json($location, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/location/{id}",
     * summary="Edit one Location by id",
     * description="update One Location by id",
     * operationId="postOneLocations",
     * tags={"location"},
     * @OA\Parameter(
     *    description="ID of location",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Location fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="building", type="text", example="1"),
     *       @OA\Property(property="floor", type="text", example="1"),
     *       @OA\Property(property="directions", type="longtext", example="1"),
     *       @OA\Property(property="longitude", type="decimal", example="1"),
     *       @OA\Property(property="latitude", type="decimal", example="1"),
     *       @OA\Property(property="area_id", type="Integer", example="1"),
     *       @OA\Property(property="personable_id", type="Integer", example="1"),
     *       @OA\Property(property="personable_type", type="text", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="image_id", type="Integer", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="voice", type="blob", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Location has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="building", type="text", example="1"),
     *       @OA\Property(property="floor", type="text", example="1"),
     *       @OA\Property(property="directions", type="longtext", example="1"),
     *       @OA\Property(property="longitude", type="decimal", example="1"),
     *       @OA\Property(property="latitude", type="decimal", example="1"),
     *       @OA\Property(property="area_id", type="Integer", example="1"),
     *       @OA\Property(property="personable_id", type="Integer", example="1"),
     *       @OA\Property(property="personable_type", type="text", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="image_id", type="Integer", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="voice", type="blob", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Location $location)
    {
        $location->update($request->all());

        return response()->json($location, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/location/{id}",
     * summary="delete Location by id",
     * description="delete one Location by id",
     * operationId="deleteOneLocations",
     * tags={"location"},
     * @OA\Parameter(
     *    description="ID of location",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when location id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Locations are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="building", type="text", example="1"),
     *       @OA\Property(property="floor", type="text", example="1"),
     *       @OA\Property(property="directions", type="longtext", example="1"),
     *       @OA\Property(property="longitude", type="decimal", example="1"),
     *       @OA\Property(property="latitude", type="decimal", example="1"),
     *       @OA\Property(property="area_id", type="Integer", example="1"),
     *       @OA\Property(property="personable_id", type="Integer", example="1"),
     *       @OA\Property(property="personable_type", type="text", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="image_id", type="Integer", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="voice", type="blob", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Location $location)
    {
        $location->delete();

        return response()->json($location, 200);
    }
}