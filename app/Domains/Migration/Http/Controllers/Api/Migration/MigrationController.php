<?php

namespace App\Domains\Migration\Http\Controllers\Api\Migration;

use App\Http\Controllers\Controller;
use App\Domains\Migration\Models\Migration;
use Illuminate\Http\Request;

/**
 * Class MigrationController.
 */
class MigrationController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/migration",
     * summary="Get All Migrations",
     * description="Show All Migrations",
     * operationId="getAllMigrations",
     * tags={"Migration"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Migration are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="migration", type="text", example="1"),
     *       @OA\Property(property="batch", type="Integer", example="1"),
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
        return Migration::all();
    }



    /**
     * @OA\Get(
     * path="/api/migration/{id}",
     * summary="Get Migration by id",
     * description="Show one Migration by id",
     * operationId="getOneMigrations",
     * tags={"migration"},
     * @OA\Parameter(
     *    description="ID of migration",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when migration id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Migration is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="migration", type="text", example="1"),
     *       @OA\Property(property="batch", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Migration $migration)
    {
        return $migration;
    }

    /**
     * @OA\Post (
     * path="/api/migration",
     * summary="Create New Migration",
     * description="Create One Migration",
     * operationId="postOneMigrations",
     * tags={"migration"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Migration fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="migration", type="text", example="1"),
     *       @OA\Property(property="batch", type="Integer", example="1"),
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
     *    description="Returns when Migration has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="migration", type="text", example="1"),
     *       @OA\Property(property="batch", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $migration = Migration::create($request->all());
        return response()->json($migration, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/migration/{id}",
     * summary="Edit one Migration by id",
     * description="update One Migration by id",
     * operationId="postOneMigrations",
     * tags={"migration"},
     * @OA\Parameter(
     *    description="ID of migration",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Migration fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="migration", type="text", example="1"),
     *       @OA\Property(property="batch", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Migration has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="migration", type="text", example="1"),
     *       @OA\Property(property="batch", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Migration $migration)
    {
        $migration->update($request->all());

        return response()->json($migration, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/migration/{id}",
     * summary="delete Migration by id",
     * description="delete one Migration by id",
     * operationId="deleteOneMigrations",
     * tags={"migration"},
     * @OA\Parameter(
     *    description="ID of migration",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when migration id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Migrations are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="migration", type="text", example="1"),
     *       @OA\Property(property="batch", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Migration $migration)
    {
        $migration->delete();

        return response()->json($migration, 200);
    }
}