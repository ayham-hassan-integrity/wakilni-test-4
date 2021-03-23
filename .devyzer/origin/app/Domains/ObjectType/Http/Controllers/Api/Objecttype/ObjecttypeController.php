<?php

namespace App\Domains\ObjectType\Http\Controllers\Api\Objecttype;

use App\Http\Controllers\Controller;
use App\Domains\ObjectType\Models\Objecttype;
use Illuminate\Http\Request;

/**
 * Class ObjecttypeController.
 */
class ObjecttypeController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/objecttype",
     * summary="Get All Objecttypes",
     * description="Show All Objecttypes",
     * operationId="getAllObjecttypes",
     * tags={"Objecttype"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Objecttype are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="type", type="text", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
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
        return Objecttype::all();
    }



    /**
     * @OA\Get(
     * path="/api/objecttype/{id}",
     * summary="Get Objecttype by id",
     * description="Show one Objecttype by id",
     * operationId="getOneObjecttypes",
     * tags={"objecttype"},
     * @OA\Parameter(
     *    description="ID of objecttype",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when objecttype id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Objecttype is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="type", type="text", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Objecttype $objecttype)
    {
        return $objecttype;
    }

    /**
     * @OA\Post (
     * path="/api/objecttype",
     * summary="Create New Objecttype",
     * description="Create One Objecttype",
     * operationId="postOneObjecttypes",
     * tags={"objecttype"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Objecttype fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="type", type="text", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
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
     *    description="Returns when Objecttype has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="type", type="text", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $objecttype = Objecttype::create($request->all());
        return response()->json($objecttype, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/objecttype/{id}",
     * summary="Edit one Objecttype by id",
     * description="update One Objecttype by id",
     * operationId="postOneObjecttypes",
     * tags={"objecttype"},
     * @OA\Parameter(
     *    description="ID of objecttype",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Objecttype fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="type", type="text", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Objecttype has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="type", type="text", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Objecttype $objecttype)
    {
        $objecttype->update($request->all());

        return response()->json($objecttype, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/objecttype/{id}",
     * summary="delete Objecttype by id",
     * description="delete one Objecttype by id",
     * operationId="deleteOneObjecttypes",
     * tags={"objecttype"},
     * @OA\Parameter(
     *    description="ID of objecttype",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when objecttype id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Objecttypes are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="type", type="text", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Objecttype $objecttype)
    {
        $objecttype->delete();

        return response()->json($objecttype, 200);
    }
}