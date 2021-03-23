<?php

namespace App\Domains\TelescopeEntry\Http\Controllers\Api\Telescopeentry;

use App\Http\Controllers\Controller;
use App\Domains\TelescopeEntry\Models\Telescopeentry;
use Illuminate\Http\Request;

/**
 * Class TelescopeentryController.
 */
class TelescopeentryController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/telescopeentry",
     * summary="Get All Telescopeentrys",
     * description="Show All Telescopeentrys",
     * operationId="getAllTelescopeentrys",
     * tags={"Telescopeentry"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Telescopeentry are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="sequence", type="Integer", example="1"),
     *       @OA\Property(property="uuid", type="char", example="1"),
     *       @OA\Property(property="batch_id", type="char", example="1"),
     *       @OA\Property(property="family_hash", type="text", example="1"),
     *       @OA\Property(property="should_display_on_index", type="Integer", example="1"),
     *       @OA\Property(property="type", type="text", example="1"),
     *       @OA\Property(property="content", type="longtext", example="1"),
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
        return Telescopeentry::all();
    }



    /**
     * @OA\Get(
     * path="/api/telescopeentry/{id}",
     * summary="Get Telescopeentry by id",
     * description="Show one Telescopeentry by id",
     * operationId="getOneTelescopeentrys",
     * tags={"telescopeentry"},
     * @OA\Parameter(
     *    description="ID of telescopeentry",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when telescopeentry id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Telescopeentry is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="sequence", type="Integer", example="1"),
     *       @OA\Property(property="uuid", type="char", example="1"),
     *       @OA\Property(property="batch_id", type="char", example="1"),
     *       @OA\Property(property="family_hash", type="text", example="1"),
     *       @OA\Property(property="should_display_on_index", type="Integer", example="1"),
     *       @OA\Property(property="type", type="text", example="1"),
     *       @OA\Property(property="content", type="longtext", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Telescopeentry $telescopeentry)
    {
        return $telescopeentry;
    }

    /**
     * @OA\Post (
     * path="/api/telescopeentry",
     * summary="Create New Telescopeentry",
     * description="Create One Telescopeentry",
     * operationId="postOneTelescopeentrys",
     * tags={"telescopeentry"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Telescopeentry fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="sequence", type="Integer", example="1"),
     *       @OA\Property(property="uuid", type="char", example="1"),
     *       @OA\Property(property="batch_id", type="char", example="1"),
     *       @OA\Property(property="family_hash", type="text", example="1"),
     *       @OA\Property(property="should_display_on_index", type="Integer", example="1"),
     *       @OA\Property(property="type", type="text", example="1"),
     *       @OA\Property(property="content", type="longtext", example="1"),
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
     *    description="Returns when Telescopeentry has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="sequence", type="Integer", example="1"),
     *       @OA\Property(property="uuid", type="char", example="1"),
     *       @OA\Property(property="batch_id", type="char", example="1"),
     *       @OA\Property(property="family_hash", type="text", example="1"),
     *       @OA\Property(property="should_display_on_index", type="Integer", example="1"),
     *       @OA\Property(property="type", type="text", example="1"),
     *       @OA\Property(property="content", type="longtext", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $telescopeentry = Telescopeentry::create($request->all());
        return response()->json($telescopeentry, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/telescopeentry/{id}",
     * summary="Edit one Telescopeentry by id",
     * description="update One Telescopeentry by id",
     * operationId="postOneTelescopeentrys",
     * tags={"telescopeentry"},
     * @OA\Parameter(
     *    description="ID of telescopeentry",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Telescopeentry fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="sequence", type="Integer", example="1"),
     *       @OA\Property(property="uuid", type="char", example="1"),
     *       @OA\Property(property="batch_id", type="char", example="1"),
     *       @OA\Property(property="family_hash", type="text", example="1"),
     *       @OA\Property(property="should_display_on_index", type="Integer", example="1"),
     *       @OA\Property(property="type", type="text", example="1"),
     *       @OA\Property(property="content", type="longtext", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Telescopeentry has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="sequence", type="Integer", example="1"),
     *       @OA\Property(property="uuid", type="char", example="1"),
     *       @OA\Property(property="batch_id", type="char", example="1"),
     *       @OA\Property(property="family_hash", type="text", example="1"),
     *       @OA\Property(property="should_display_on_index", type="Integer", example="1"),
     *       @OA\Property(property="type", type="text", example="1"),
     *       @OA\Property(property="content", type="longtext", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Telescopeentry $telescopeentry)
    {
        $telescopeentry->update($request->all());

        return response()->json($telescopeentry, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/telescopeentry/{id}",
     * summary="delete Telescopeentry by id",
     * description="delete one Telescopeentry by id",
     * operationId="deleteOneTelescopeentrys",
     * tags={"telescopeentry"},
     * @OA\Parameter(
     *    description="ID of telescopeentry",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when telescopeentry id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Telescopeentrys are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="sequence", type="Integer", example="1"),
     *       @OA\Property(property="uuid", type="char", example="1"),
     *       @OA\Property(property="batch_id", type="char", example="1"),
     *       @OA\Property(property="family_hash", type="text", example="1"),
     *       @OA\Property(property="should_display_on_index", type="Integer", example="1"),
     *       @OA\Property(property="type", type="text", example="1"),
     *       @OA\Property(property="content", type="longtext", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Telescopeentry $telescopeentry)
    {
        $telescopeentry->delete();

        return response()->json($telescopeentry, 200);
    }
}