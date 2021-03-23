<?php

namespace App\Domains\SettingStore\Http\Controllers\Api\Settingstore;

use App\Http\Controllers\Controller;
use App\Domains\SettingStore\Models\Settingstore;
use Illuminate\Http\Request;

/**
 * Class SettingstoreController.
 */
class SettingstoreController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/settingstore",
     * summary="Get All Settingstores",
     * description="Show All Settingstores",
     * operationId="getAllSettingstores",
     * tags={"Settingstore"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Settingstore are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="setting_id", type="Integer", example="1"),
     *       @OA\Property(property="value", type="text", example="1"),
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
        return Settingstore::all();
    }



    /**
     * @OA\Get(
     * path="/api/settingstore/{id}",
     * summary="Get Settingstore by id",
     * description="Show one Settingstore by id",
     * operationId="getOneSettingstores",
     * tags={"settingstore"},
     * @OA\Parameter(
     *    description="ID of settingstore",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when settingstore id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Settingstore is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="setting_id", type="Integer", example="1"),
     *       @OA\Property(property="value", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Settingstore $settingstore)
    {
        return $settingstore;
    }

    /**
     * @OA\Post (
     * path="/api/settingstore",
     * summary="Create New Settingstore",
     * description="Create One Settingstore",
     * operationId="postOneSettingstores",
     * tags={"settingstore"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Settingstore fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="setting_id", type="Integer", example="1"),
     *       @OA\Property(property="value", type="text", example="1"),
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
     *    description="Returns when Settingstore has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="setting_id", type="Integer", example="1"),
     *       @OA\Property(property="value", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $settingstore = Settingstore::create($request->all());
        return response()->json($settingstore, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/settingstore/{id}",
     * summary="Edit one Settingstore by id",
     * description="update One Settingstore by id",
     * operationId="postOneSettingstores",
     * tags={"settingstore"},
     * @OA\Parameter(
     *    description="ID of settingstore",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Settingstore fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="setting_id", type="Integer", example="1"),
     *       @OA\Property(property="value", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Settingstore has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="setting_id", type="Integer", example="1"),
     *       @OA\Property(property="value", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Settingstore $settingstore)
    {
        $settingstore->update($request->all());

        return response()->json($settingstore, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/settingstore/{id}",
     * summary="delete Settingstore by id",
     * description="delete one Settingstore by id",
     * operationId="deleteOneSettingstores",
     * tags={"settingstore"},
     * @OA\Parameter(
     *    description="ID of settingstore",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when settingstore id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Settingstores are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="setting_id", type="Integer", example="1"),
     *       @OA\Property(property="value", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Settingstore $settingstore)
    {
        $settingstore->delete();

        return response()->json($settingstore, 200);
    }
}