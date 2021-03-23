<?php

namespace App\Domains\Store\Http\Controllers\Api\Store;

use App\Http\Controllers\Controller;
use App\Domains\Store\Models\Store;
use Illuminate\Http\Request;

/**
 * Class StoreController.
 */
class StoreController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/store",
     * summary="Get All Stores",
     * description="Show All Stores",
     * operationId="getAllStores",
     * tags={"Store"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Store are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="prefix", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
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
        return Store::all();
    }



    /**
     * @OA\Get(
     * path="/api/store/{id}",
     * summary="Get Store by id",
     * description="Show one Store by id",
     * operationId="getOneStores",
     * tags={"store"},
     * @OA\Parameter(
     *    description="ID of store",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when store id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Store is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="prefix", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Store $store)
    {
        return $store;
    }

    /**
     * @OA\Post (
     * path="/api/store",
     * summary="Create New Store",
     * description="Create One Store",
     * operationId="postOneStores",
     * tags={"store"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Store fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="prefix", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
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
     *    description="Returns when Store has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="prefix", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $store = Store::create($request->all());
        return response()->json($store, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/store/{id}",
     * summary="Edit one Store by id",
     * description="update One Store by id",
     * operationId="postOneStores",
     * tags={"store"},
     * @OA\Parameter(
     *    description="ID of store",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Store fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="prefix", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Store has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="prefix", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Store $store)
    {
        $store->update($request->all());

        return response()->json($store, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/store/{id}",
     * summary="delete Store by id",
     * description="delete one Store by id",
     * operationId="deleteOneStores",
     * tags={"store"},
     * @OA\Parameter(
     *    description="ID of store",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when store id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Stores are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="prefix", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Store $store)
    {
        $store->delete();

        return response()->json($store, 200);
    }
}