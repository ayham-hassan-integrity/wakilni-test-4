<?php

namespace App\Domains\ActivityLog\Http\Controllers\Api\Activitylog;

use App\Http\Controllers\Controller;
use App\Domains\ActivityLog\Models\Activitylog;
use Illuminate\Http\Request;

/**
 * Class ActivitylogController.
 */
class ActivitylogController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/activitylog",
     * summary="Get All Activitylogs",
     * description="Show All Activitylogs",
     * operationId="getAllActivitylogs",
     * tags={"Activitylog"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Activitylog are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="log_name", type="text", example="1"),
     *       @OA\Property(property="description", type="text", example="1"),
     *       @OA\Property(property="subject_id", type="Integer", example="1"),
     *       @OA\Property(property="subject_type", type="text", example="1"),
     *       @OA\Property(property="causer_id", type="Integer", example="1"),
     *       @OA\Property(property="causer_type", type="text", example="1"),
     *       @OA\Property(property="properties", type="text", example="1"),
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
        return Activitylog::all();
    }



    /**
     * @OA\Get(
     * path="/api/activitylog/{id}",
     * summary="Get Activitylog by id",
     * description="Show one Activitylog by id",
     * operationId="getOneActivitylogs",
     * tags={"activitylog"},
     * @OA\Parameter(
     *    description="ID of activitylog",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when activitylog id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Activitylog is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="log_name", type="text", example="1"),
     *       @OA\Property(property="description", type="text", example="1"),
     *       @OA\Property(property="subject_id", type="Integer", example="1"),
     *       @OA\Property(property="subject_type", type="text", example="1"),
     *       @OA\Property(property="causer_id", type="Integer", example="1"),
     *       @OA\Property(property="causer_type", type="text", example="1"),
     *       @OA\Property(property="properties", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Activitylog $activitylog)
    {
        return $activitylog;
    }

    /**
     * @OA\Post (
     * path="/api/activitylog",
     * summary="Create New Activitylog",
     * description="Create One Activitylog",
     * operationId="postOneActivitylogs",
     * tags={"activitylog"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Activitylog fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="log_name", type="text", example="1"),
     *       @OA\Property(property="description", type="text", example="1"),
     *       @OA\Property(property="subject_id", type="Integer", example="1"),
     *       @OA\Property(property="subject_type", type="text", example="1"),
     *       @OA\Property(property="causer_id", type="Integer", example="1"),
     *       @OA\Property(property="causer_type", type="text", example="1"),
     *       @OA\Property(property="properties", type="text", example="1"),
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
     *    description="Returns when Activitylog has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="log_name", type="text", example="1"),
     *       @OA\Property(property="description", type="text", example="1"),
     *       @OA\Property(property="subject_id", type="Integer", example="1"),
     *       @OA\Property(property="subject_type", type="text", example="1"),
     *       @OA\Property(property="causer_id", type="Integer", example="1"),
     *       @OA\Property(property="causer_type", type="text", example="1"),
     *       @OA\Property(property="properties", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $activitylog = Activitylog::create($request->all());
        return response()->json($activitylog, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/activitylog/{id}",
     * summary="Edit one Activitylog by id",
     * description="update One Activitylog by id",
     * operationId="postOneActivitylogs",
     * tags={"activitylog"},
     * @OA\Parameter(
     *    description="ID of activitylog",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Activitylog fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="log_name", type="text", example="1"),
     *       @OA\Property(property="description", type="text", example="1"),
     *       @OA\Property(property="subject_id", type="Integer", example="1"),
     *       @OA\Property(property="subject_type", type="text", example="1"),
     *       @OA\Property(property="causer_id", type="Integer", example="1"),
     *       @OA\Property(property="causer_type", type="text", example="1"),
     *       @OA\Property(property="properties", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Activitylog has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="log_name", type="text", example="1"),
     *       @OA\Property(property="description", type="text", example="1"),
     *       @OA\Property(property="subject_id", type="Integer", example="1"),
     *       @OA\Property(property="subject_type", type="text", example="1"),
     *       @OA\Property(property="causer_id", type="Integer", example="1"),
     *       @OA\Property(property="causer_type", type="text", example="1"),
     *       @OA\Property(property="properties", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Activitylog $activitylog)
    {
        $activitylog->update($request->all());

        return response()->json($activitylog, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/activitylog/{id}",
     * summary="delete Activitylog by id",
     * description="delete one Activitylog by id",
     * operationId="deleteOneActivitylogs",
     * tags={"activitylog"},
     * @OA\Parameter(
     *    description="ID of activitylog",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when activitylog id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Activitylogs are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="log_name", type="text", example="1"),
     *       @OA\Property(property="description", type="text", example="1"),
     *       @OA\Property(property="subject_id", type="Integer", example="1"),
     *       @OA\Property(property="subject_type", type="text", example="1"),
     *       @OA\Property(property="causer_id", type="Integer", example="1"),
     *       @OA\Property(property="causer_type", type="text", example="1"),
     *       @OA\Property(property="properties", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Activitylog $activitylog)
    {
        $activitylog->delete();

        return response()->json($activitylog, 200);
    }
}