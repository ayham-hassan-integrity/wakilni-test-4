<?php

namespace App\Domains\App\Http\Controllers\Api\App;

use App\Http\Controllers\Controller;
use App\Domains\App\Models\App;
use Illuminate\Http\Request;

/**
 * Class AppController.
 */
class AppController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/app",
     * summary="Get All Apps",
     * description="Show All Apps",
     * operationId="getAllApps",
     * tags={"App"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when App are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="public", type="Integer", example="1"),
     *       @OA\Property(property="client_id", type="text", example="1"),
     *       @OA\Property(property="client_secret", type="text", example="1"),
     *       @OA\Property(property="random_authentication", type="Integer", example="1"),
     *       @OA\Property(property="in_house_development", type="Integer", example="1"),
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
        return App::all();
    }



    /**
     * @OA\Get(
     * path="/api/app/{id}",
     * summary="Get App by id",
     * description="Show one App by id",
     * operationId="getOneApps",
     * tags={"app"},
     * @OA\Parameter(
     *    description="ID of app",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when app id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when App is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="public", type="Integer", example="1"),
     *       @OA\Property(property="client_id", type="text", example="1"),
     *       @OA\Property(property="client_secret", type="text", example="1"),
     *       @OA\Property(property="random_authentication", type="Integer", example="1"),
     *       @OA\Property(property="in_house_development", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(App $app)
    {
        return $app;
    }

    /**
     * @OA\Post (
     * path="/api/app",
     * summary="Create New App",
     * description="Create One App",
     * operationId="postOneApps",
     * tags={"app"},
     * @OA\RequestBody(
     *    required=true,
     *    description="App fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="public", type="Integer", example="1"),
     *       @OA\Property(property="client_id", type="text", example="1"),
     *       @OA\Property(property="client_secret", type="text", example="1"),
     *       @OA\Property(property="random_authentication", type="Integer", example="1"),
     *       @OA\Property(property="in_house_development", type="Integer", example="1"),
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
     *    description="Returns when App has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="public", type="Integer", example="1"),
     *       @OA\Property(property="client_id", type="text", example="1"),
     *       @OA\Property(property="client_secret", type="text", example="1"),
     *       @OA\Property(property="random_authentication", type="Integer", example="1"),
     *       @OA\Property(property="in_house_development", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $app = App::create($request->all());
        return response()->json($app, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/app/{id}",
     * summary="Edit one App by id",
     * description="update One App by id",
     * operationId="postOneApps",
     * tags={"app"},
     * @OA\Parameter(
     *    description="ID of app",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="App fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="public", type="Integer", example="1"),
     *       @OA\Property(property="client_id", type="text", example="1"),
     *       @OA\Property(property="client_secret", type="text", example="1"),
     *       @OA\Property(property="random_authentication", type="Integer", example="1"),
     *       @OA\Property(property="in_house_development", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when App has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="public", type="Integer", example="1"),
     *       @OA\Property(property="client_id", type="text", example="1"),
     *       @OA\Property(property="client_secret", type="text", example="1"),
     *       @OA\Property(property="random_authentication", type="Integer", example="1"),
     *       @OA\Property(property="in_house_development", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, App $app)
    {
        $app->update($request->all());

        return response()->json($app, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/app/{id}",
     * summary="delete App by id",
     * description="delete one App by id",
     * operationId="deleteOneApps",
     * tags={"app"},
     * @OA\Parameter(
     *    description="ID of app",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when app id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Apps are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="public", type="Integer", example="1"),
     *       @OA\Property(property="client_id", type="text", example="1"),
     *       @OA\Property(property="client_secret", type="text", example="1"),
     *       @OA\Property(property="random_authentication", type="Integer", example="1"),
     *       @OA\Property(property="in_house_development", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(App $app)
    {
        $app->delete();

        return response()->json($app, 200);
    }
}