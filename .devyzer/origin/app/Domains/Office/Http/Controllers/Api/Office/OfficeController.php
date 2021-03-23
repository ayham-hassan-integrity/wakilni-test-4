<?php

namespace App\Domains\Office\Http\Controllers\Api\Office;

use App\Http\Controllers\Controller;
use App\Domains\Office\Models\Office;
use Illuminate\Http\Request;

/**
 * Class OfficeController.
 */
class OfficeController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/office",
     * summary="Get All Offices",
     * description="Show All Offices",
     * operationId="getAllOffices",
     * tags={"Office"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Office are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
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
        return Office::all();
    }



    /**
     * @OA\Get(
     * path="/api/office/{id}",
     * summary="Get Office by id",
     * description="Show one Office by id",
     * operationId="getOneOffices",
     * tags={"office"},
     * @OA\Parameter(
     *    description="ID of office",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when office id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Office is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Office $office)
    {
        return $office;
    }

    /**
     * @OA\Post (
     * path="/api/office",
     * summary="Create New Office",
     * description="Create One Office",
     * operationId="postOneOffices",
     * tags={"office"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Office fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
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
     *    description="Returns when Office has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $office = Office::create($request->all());
        return response()->json($office, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/office/{id}",
     * summary="Edit one Office by id",
     * description="update One Office by id",
     * operationId="postOneOffices",
     * tags={"office"},
     * @OA\Parameter(
     *    description="ID of office",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Office fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Office has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Office $office)
    {
        $office->update($request->all());

        return response()->json($office, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/office/{id}",
     * summary="delete Office by id",
     * description="delete one Office by id",
     * operationId="deleteOneOffices",
     * tags={"office"},
     * @OA\Parameter(
     *    description="ID of office",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when office id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Offices are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="area", type="longtext", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Office $office)
    {
        $office->delete();

        return response()->json($office, 200);
    }
}