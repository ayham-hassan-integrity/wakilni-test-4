<?php

namespace App\Domains\PiggyBank\Http\Controllers\Api\Piggybank;

use App\Http\Controllers\Controller;
use App\Domains\PiggyBank\Models\Piggybank;
use Illuminate\Http\Request;

/**
 * Class PiggybankController.
 */
class PiggybankController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/piggybank",
     * summary="Get All Piggybanks",
     * description="Show All Piggybanks",
     * operationId="getAllPiggybanks",
     * tags={"Piggybank"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Piggybank are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="start_date", type="datetime", example="1"),
     *       @OA\Property(property="end_date", type="datetime", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
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
        return Piggybank::all();
    }



    /**
     * @OA\Get(
     * path="/api/piggybank/{id}",
     * summary="Get Piggybank by id",
     * description="Show one Piggybank by id",
     * operationId="getOnePiggybanks",
     * tags={"piggybank"},
     * @OA\Parameter(
     *    description="ID of piggybank",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when piggybank id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Piggybank is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="start_date", type="datetime", example="1"),
     *       @OA\Property(property="end_date", type="datetime", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Piggybank $piggybank)
    {
        return $piggybank;
    }

    /**
     * @OA\Post (
     * path="/api/piggybank",
     * summary="Create New Piggybank",
     * description="Create One Piggybank",
     * operationId="postOnePiggybanks",
     * tags={"piggybank"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Piggybank fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="start_date", type="datetime", example="1"),
     *       @OA\Property(property="end_date", type="datetime", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
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
     *    description="Returns when Piggybank has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="start_date", type="datetime", example="1"),
     *       @OA\Property(property="end_date", type="datetime", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $piggybank = Piggybank::create($request->all());
        return response()->json($piggybank, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/piggybank/{id}",
     * summary="Edit one Piggybank by id",
     * description="update One Piggybank by id",
     * operationId="postOnePiggybanks",
     * tags={"piggybank"},
     * @OA\Parameter(
     *    description="ID of piggybank",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Piggybank fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="start_date", type="datetime", example="1"),
     *       @OA\Property(property="end_date", type="datetime", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Piggybank has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="start_date", type="datetime", example="1"),
     *       @OA\Property(property="end_date", type="datetime", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Piggybank $piggybank)
    {
        $piggybank->update($request->all());

        return response()->json($piggybank, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/piggybank/{id}",
     * summary="delete Piggybank by id",
     * description="delete one Piggybank by id",
     * operationId="deleteOnePiggybanks",
     * tags={"piggybank"},
     * @OA\Parameter(
     *    description="ID of piggybank",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when piggybank id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Piggybanks are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="start_date", type="datetime", example="1"),
     *       @OA\Property(property="end_date", type="datetime", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Piggybank $piggybank)
    {
        $piggybank->delete();

        return response()->json($piggybank, 200);
    }
}