<?php

namespace App\Domains\TimeZone\Http\Controllers\Api\Timezone;

use App\Http\Controllers\Controller;
use App\Domains\TimeZone\Models\Timezone;
use Illuminate\Http\Request;

/**
 * Class TimezoneController.
 */
class TimezoneController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/timezone",
     * summary="Get All Timezones",
     * description="Show All Timezones",
     * operationId="getAllTimezones",
     * tags={"Timezone"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Timezone are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="zone", type="text", example="1"),
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
        return Timezone::all();
    }



    /**
     * @OA\Get(
     * path="/api/timezone/{id}",
     * summary="Get Timezone by id",
     * description="Show one Timezone by id",
     * operationId="getOneTimezones",
     * tags={"timezone"},
     * @OA\Parameter(
     *    description="ID of timezone",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when timezone id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Timezone is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="zone", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Timezone $timezone)
    {
        return $timezone;
    }

    /**
     * @OA\Post (
     * path="/api/timezone",
     * summary="Create New Timezone",
     * description="Create One Timezone",
     * operationId="postOneTimezones",
     * tags={"timezone"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Timezone fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="zone", type="text", example="1"),
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
     *    description="Returns when Timezone has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="zone", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $timezone = Timezone::create($request->all());
        return response()->json($timezone, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/timezone/{id}",
     * summary="Edit one Timezone by id",
     * description="update One Timezone by id",
     * operationId="postOneTimezones",
     * tags={"timezone"},
     * @OA\Parameter(
     *    description="ID of timezone",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Timezone fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="zone", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Timezone has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="zone", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Timezone $timezone)
    {
        $timezone->update($request->all());

        return response()->json($timezone, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/timezone/{id}",
     * summary="delete Timezone by id",
     * description="delete one Timezone by id",
     * operationId="deleteOneTimezones",
     * tags={"timezone"},
     * @OA\Parameter(
     *    description="ID of timezone",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when timezone id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Timezones are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="zone", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Timezone $timezone)
    {
        $timezone->delete();

        return response()->json($timezone, 200);
    }
}