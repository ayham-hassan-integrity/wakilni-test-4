<?php

namespace App\Domains\TelescopeEntryTag\Http\Controllers\Api\Telescopeentrytag;

use App\Http\Controllers\Controller;
use App\Domains\TelescopeEntryTag\Models\Telescopeentrytag;
use Illuminate\Http\Request;

/**
 * Class TelescopeentrytagController.
 */
class TelescopeentrytagController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/telescopeentrytag",
     * summary="Get All Telescopeentrytags",
     * description="Show All Telescopeentrytags",
     * operationId="getAllTelescopeentrytags",
     * tags={"Telescopeentrytag"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Telescopeentrytag are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="entry_uuid", type="char", example="1"),
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
        return Telescopeentrytag::all();
    }



    /**
     * @OA\Get(
     * path="/api/telescopeentrytag/{id}",
     * summary="Get Telescopeentrytag by id",
     * description="Show one Telescopeentrytag by id",
     * operationId="getOneTelescopeentrytags",
     * tags={"telescopeentrytag"},
     * @OA\Parameter(
     *    description="ID of telescopeentrytag",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when telescopeentrytag id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Telescopeentrytag is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="entry_uuid", type="char", example="1"),
     *       @OA\Property(property="tag", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Telescopeentrytag $telescopeentrytag)
    {
        return $telescopeentrytag;
    }

    /**
     * @OA\Post (
     * path="/api/telescopeentrytag",
     * summary="Create New Telescopeentrytag",
     * description="Create One Telescopeentrytag",
     * operationId="postOneTelescopeentrytags",
     * tags={"telescopeentrytag"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Telescopeentrytag fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="entry_uuid", type="char", example="1"),
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
     *    description="Returns when Telescopeentrytag has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="entry_uuid", type="char", example="1"),
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
        $telescopeentrytag = Telescopeentrytag::create($request->all());
        return response()->json($telescopeentrytag, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/telescopeentrytag/{id}",
     * summary="Edit one Telescopeentrytag by id",
     * description="update One Telescopeentrytag by id",
     * operationId="postOneTelescopeentrytags",
     * tags={"telescopeentrytag"},
     * @OA\Parameter(
     *    description="ID of telescopeentrytag",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Telescopeentrytag fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="entry_uuid", type="char", example="1"),
     *       @OA\Property(property="tag", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Telescopeentrytag has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="entry_uuid", type="char", example="1"),
     *       @OA\Property(property="tag", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Telescopeentrytag $telescopeentrytag)
    {
        $telescopeentrytag->update($request->all());

        return response()->json($telescopeentrytag, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/telescopeentrytag/{id}",
     * summary="delete Telescopeentrytag by id",
     * description="delete one Telescopeentrytag by id",
     * operationId="deleteOneTelescopeentrytags",
     * tags={"telescopeentrytag"},
     * @OA\Parameter(
     *    description="ID of telescopeentrytag",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when telescopeentrytag id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Telescopeentrytags are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="entry_uuid", type="char", example="1"),
     *       @OA\Property(property="tag", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Telescopeentrytag $telescopeentrytag)
    {
        $telescopeentrytag->delete();

        return response()->json($telescopeentrytag, 200);
    }
}