<?php

namespace App\Domains\FailedJob\Http\Controllers\Api\Failedjob;

use App\Http\Controllers\Controller;
use App\Domains\FailedJob\Models\Failedjob;
use Illuminate\Http\Request;

/**
 * Class FailedjobController.
 */
class FailedjobController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/failedjob",
     * summary="Get All Failedjobs",
     * description="Show All Failedjobs",
     * operationId="getAllFailedjobs",
     * tags={"Failedjob"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Failedjob are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="connection", type="text", example="1"),
     *       @OA\Property(property="queue", type="text", example="1"),
     *       @OA\Property(property="payload", type="longtext", example="1"),
     *       @OA\Property(property="exception", type="longtext", example="1"),
     *       @OA\Property(property="failed_at", type="timestamp", example="1"),
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
        return Failedjob::all();
    }



    /**
     * @OA\Get(
     * path="/api/failedjob/{id}",
     * summary="Get Failedjob by id",
     * description="Show one Failedjob by id",
     * operationId="getOneFailedjobs",
     * tags={"failedjob"},
     * @OA\Parameter(
     *    description="ID of failedjob",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when failedjob id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Failedjob is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="connection", type="text", example="1"),
     *       @OA\Property(property="queue", type="text", example="1"),
     *       @OA\Property(property="payload", type="longtext", example="1"),
     *       @OA\Property(property="exception", type="longtext", example="1"),
     *       @OA\Property(property="failed_at", type="timestamp", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Failedjob $failedjob)
    {
        return $failedjob;
    }

    /**
     * @OA\Post (
     * path="/api/failedjob",
     * summary="Create New Failedjob",
     * description="Create One Failedjob",
     * operationId="postOneFailedjobs",
     * tags={"failedjob"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Failedjob fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="connection", type="text", example="1"),
     *       @OA\Property(property="queue", type="text", example="1"),
     *       @OA\Property(property="payload", type="longtext", example="1"),
     *       @OA\Property(property="exception", type="longtext", example="1"),
     *       @OA\Property(property="failed_at", type="timestamp", example="1"),
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
     *    description="Returns when Failedjob has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="connection", type="text", example="1"),
     *       @OA\Property(property="queue", type="text", example="1"),
     *       @OA\Property(property="payload", type="longtext", example="1"),
     *       @OA\Property(property="exception", type="longtext", example="1"),
     *       @OA\Property(property="failed_at", type="timestamp", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $failedjob = Failedjob::create($request->all());
        return response()->json($failedjob, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/failedjob/{id}",
     * summary="Edit one Failedjob by id",
     * description="update One Failedjob by id",
     * operationId="postOneFailedjobs",
     * tags={"failedjob"},
     * @OA\Parameter(
     *    description="ID of failedjob",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Failedjob fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="connection", type="text", example="1"),
     *       @OA\Property(property="queue", type="text", example="1"),
     *       @OA\Property(property="payload", type="longtext", example="1"),
     *       @OA\Property(property="exception", type="longtext", example="1"),
     *       @OA\Property(property="failed_at", type="timestamp", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Failedjob has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="connection", type="text", example="1"),
     *       @OA\Property(property="queue", type="text", example="1"),
     *       @OA\Property(property="payload", type="longtext", example="1"),
     *       @OA\Property(property="exception", type="longtext", example="1"),
     *       @OA\Property(property="failed_at", type="timestamp", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Failedjob $failedjob)
    {
        $failedjob->update($request->all());

        return response()->json($failedjob, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/failedjob/{id}",
     * summary="delete Failedjob by id",
     * description="delete one Failedjob by id",
     * operationId="deleteOneFailedjobs",
     * tags={"failedjob"},
     * @OA\Parameter(
     *    description="ID of failedjob",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when failedjob id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Failedjobs are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="connection", type="text", example="1"),
     *       @OA\Property(property="queue", type="text", example="1"),
     *       @OA\Property(property="payload", type="longtext", example="1"),
     *       @OA\Property(property="exception", type="longtext", example="1"),
     *       @OA\Property(property="failed_at", type="timestamp", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Failedjob $failedjob)
    {
        $failedjob->delete();

        return response()->json($failedjob, 200);
    }
}