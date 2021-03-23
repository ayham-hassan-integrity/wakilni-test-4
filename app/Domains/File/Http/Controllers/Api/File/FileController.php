<?php

namespace App\Domains\File\Http\Controllers\Api\File;

use App\Http\Controllers\Controller;
use App\Domains\File\Models\File;
use Illuminate\Http\Request;

/**
 * Class FileController.
 */
class FileController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/file",
     * summary="Get All Files",
     * description="Show All Files",
     * operationId="getAllFiles",
     * tags={"File"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when File are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="mime", type="text", example="1"),
     *       @OA\Property(property="filename", type="text", example="1"),
     *       @OA\Property(property="size", type="Integer", example="1"),
     *       @OA\Property(property="storage_path", type="text", example="1"),
     *       @OA\Property(property="disk", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="fileable_id", type="Integer", example="1"),
     *       @OA\Property(property="fileable_type", type="text", example="1"),
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
        return File::all();
    }



    /**
     * @OA\Get(
     * path="/api/file/{id}",
     * summary="Get File by id",
     * description="Show one File by id",
     * operationId="getOneFiles",
     * tags={"file"},
     * @OA\Parameter(
     *    description="ID of file",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when file id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when File is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="mime", type="text", example="1"),
     *       @OA\Property(property="filename", type="text", example="1"),
     *       @OA\Property(property="size", type="Integer", example="1"),
     *       @OA\Property(property="storage_path", type="text", example="1"),
     *       @OA\Property(property="disk", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="fileable_id", type="Integer", example="1"),
     *       @OA\Property(property="fileable_type", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(File $file)
    {
        return $file;
    }

    /**
     * @OA\Post (
     * path="/api/file",
     * summary="Create New File",
     * description="Create One File",
     * operationId="postOneFiles",
     * tags={"file"},
     * @OA\RequestBody(
     *    required=true,
     *    description="File fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="mime", type="text", example="1"),
     *       @OA\Property(property="filename", type="text", example="1"),
     *       @OA\Property(property="size", type="Integer", example="1"),
     *       @OA\Property(property="storage_path", type="text", example="1"),
     *       @OA\Property(property="disk", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="fileable_id", type="Integer", example="1"),
     *       @OA\Property(property="fileable_type", type="text", example="1"),
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
     *    description="Returns when File has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="mime", type="text", example="1"),
     *       @OA\Property(property="filename", type="text", example="1"),
     *       @OA\Property(property="size", type="Integer", example="1"),
     *       @OA\Property(property="storage_path", type="text", example="1"),
     *       @OA\Property(property="disk", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="fileable_id", type="Integer", example="1"),
     *       @OA\Property(property="fileable_type", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $file = File::create($request->all());
        return response()->json($file, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/file/{id}",
     * summary="Edit one File by id",
     * description="update One File by id",
     * operationId="postOneFiles",
     * tags={"file"},
     * @OA\Parameter(
     *    description="ID of file",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="File fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="mime", type="text", example="1"),
     *       @OA\Property(property="filename", type="text", example="1"),
     *       @OA\Property(property="size", type="Integer", example="1"),
     *       @OA\Property(property="storage_path", type="text", example="1"),
     *       @OA\Property(property="disk", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="fileable_id", type="Integer", example="1"),
     *       @OA\Property(property="fileable_type", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when File has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="mime", type="text", example="1"),
     *       @OA\Property(property="filename", type="text", example="1"),
     *       @OA\Property(property="size", type="Integer", example="1"),
     *       @OA\Property(property="storage_path", type="text", example="1"),
     *       @OA\Property(property="disk", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="fileable_id", type="Integer", example="1"),
     *       @OA\Property(property="fileable_type", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, File $file)
    {
        $file->update($request->all());

        return response()->json($file, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/file/{id}",
     * summary="delete File by id",
     * description="delete one File by id",
     * operationId="deleteOneFiles",
     * tags={"file"},
     * @OA\Parameter(
     *    description="ID of file",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when file id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Files are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="mime", type="text", example="1"),
     *       @OA\Property(property="filename", type="text", example="1"),
     *       @OA\Property(property="size", type="Integer", example="1"),
     *       @OA\Property(property="storage_path", type="text", example="1"),
     *       @OA\Property(property="disk", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="fileable_id", type="Integer", example="1"),
     *       @OA\Property(property="fileable_type", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(File $file)
    {
        $file->delete();

        return response()->json($file, 200);
    }
}