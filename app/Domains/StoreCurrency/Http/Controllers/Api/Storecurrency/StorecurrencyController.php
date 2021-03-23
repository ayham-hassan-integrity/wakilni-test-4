<?php

namespace App\Domains\StoreCurrency\Http\Controllers\Api\Storecurrency;

use App\Http\Controllers\Controller;
use App\Domains\StoreCurrency\Models\Storecurrency;
use Illuminate\Http\Request;

/**
 * Class StorecurrencyController.
 */
class StorecurrencyController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/storecurrency",
     * summary="Get All Storecurrencys",
     * description="Show All Storecurrencys",
     * operationId="getAllStorecurrencys",
     * tags={"Storecurrency"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Storecurrency are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
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
        return Storecurrency::all();
    }



    /**
     * @OA\Get(
     * path="/api/storecurrency/{id}",
     * summary="Get Storecurrency by id",
     * description="Show one Storecurrency by id",
     * operationId="getOneStorecurrencys",
     * tags={"storecurrency"},
     * @OA\Parameter(
     *    description="ID of storecurrency",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when storecurrency id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Storecurrency is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Storecurrency $storecurrency)
    {
        return $storecurrency;
    }

    /**
     * @OA\Post (
     * path="/api/storecurrency",
     * summary="Create New Storecurrency",
     * description="Create One Storecurrency",
     * operationId="postOneStorecurrencys",
     * tags={"storecurrency"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Storecurrency fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
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
     *    description="Returns when Storecurrency has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $storecurrency = Storecurrency::create($request->all());
        return response()->json($storecurrency, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/storecurrency/{id}",
     * summary="Edit one Storecurrency by id",
     * description="update One Storecurrency by id",
     * operationId="postOneStorecurrencys",
     * tags={"storecurrency"},
     * @OA\Parameter(
     *    description="ID of storecurrency",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Storecurrency fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Storecurrency has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Storecurrency $storecurrency)
    {
        $storecurrency->update($request->all());

        return response()->json($storecurrency, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/storecurrency/{id}",
     * summary="delete Storecurrency by id",
     * description="delete one Storecurrency by id",
     * operationId="deleteOneStorecurrencys",
     * tags={"storecurrency"},
     * @OA\Parameter(
     *    description="ID of storecurrency",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when storecurrency id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Storecurrencys are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Storecurrency $storecurrency)
    {
        $storecurrency->delete();

        return response()->json($storecurrency, 200);
    }
}