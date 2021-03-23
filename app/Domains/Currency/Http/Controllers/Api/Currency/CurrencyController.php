<?php

namespace App\Domains\Currency\Http\Controllers\Api\Currency;

use App\Http\Controllers\Controller;
use App\Domains\Currency\Models\Currency;
use Illuminate\Http\Request;

/**
 * Class CurrencyController.
 */
class CurrencyController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/currency",
     * summary="Get All Currencys",
     * description="Show All Currencys",
     * operationId="getAllCurrencys",
     * tags={"Currency"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Currency are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="title", type="text", example="1"),
     *       @OA\Property(property="symbol_left", type="text", example="1"),
     *       @OA\Property(property="symbol_right", type="text", example="1"),
     *       @OA\Property(property="code", type="text", example="1"),
     *       @OA\Property(property="exchange_rate", type="double(8,2)", example="1"),
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
        return Currency::all();
    }



    /**
     * @OA\Get(
     * path="/api/currency/{id}",
     * summary="Get Currency by id",
     * description="Show one Currency by id",
     * operationId="getOneCurrencys",
     * tags={"currency"},
     * @OA\Parameter(
     *    description="ID of currency",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when currency id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Currency is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="title", type="text", example="1"),
     *       @OA\Property(property="symbol_left", type="text", example="1"),
     *       @OA\Property(property="symbol_right", type="text", example="1"),
     *       @OA\Property(property="code", type="text", example="1"),
     *       @OA\Property(property="exchange_rate", type="double(8,2)", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Currency $currency)
    {
        return $currency;
    }

    /**
     * @OA\Post (
     * path="/api/currency",
     * summary="Create New Currency",
     * description="Create One Currency",
     * operationId="postOneCurrencys",
     * tags={"currency"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Currency fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="title", type="text", example="1"),
     *       @OA\Property(property="symbol_left", type="text", example="1"),
     *       @OA\Property(property="symbol_right", type="text", example="1"),
     *       @OA\Property(property="code", type="text", example="1"),
     *       @OA\Property(property="exchange_rate", type="double(8,2)", example="1"),
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
     *    description="Returns when Currency has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="title", type="text", example="1"),
     *       @OA\Property(property="symbol_left", type="text", example="1"),
     *       @OA\Property(property="symbol_right", type="text", example="1"),
     *       @OA\Property(property="code", type="text", example="1"),
     *       @OA\Property(property="exchange_rate", type="double(8,2)", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $currency = Currency::create($request->all());
        return response()->json($currency, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/currency/{id}",
     * summary="Edit one Currency by id",
     * description="update One Currency by id",
     * operationId="postOneCurrencys",
     * tags={"currency"},
     * @OA\Parameter(
     *    description="ID of currency",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Currency fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="title", type="text", example="1"),
     *       @OA\Property(property="symbol_left", type="text", example="1"),
     *       @OA\Property(property="symbol_right", type="text", example="1"),
     *       @OA\Property(property="code", type="text", example="1"),
     *       @OA\Property(property="exchange_rate", type="double(8,2)", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Currency has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="title", type="text", example="1"),
     *       @OA\Property(property="symbol_left", type="text", example="1"),
     *       @OA\Property(property="symbol_right", type="text", example="1"),
     *       @OA\Property(property="code", type="text", example="1"),
     *       @OA\Property(property="exchange_rate", type="double(8,2)", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Currency $currency)
    {
        $currency->update($request->all());

        return response()->json($currency, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/currency/{id}",
     * summary="delete Currency by id",
     * description="delete one Currency by id",
     * operationId="deleteOneCurrencys",
     * tags={"currency"},
     * @OA\Parameter(
     *    description="ID of currency",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when currency id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Currencys are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="title", type="text", example="1"),
     *       @OA\Property(property="symbol_left", type="text", example="1"),
     *       @OA\Property(property="symbol_right", type="text", example="1"),
     *       @OA\Property(property="code", type="text", example="1"),
     *       @OA\Property(property="exchange_rate", type="double(8,2)", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Currency $currency)
    {
        $currency->delete();

        return response()->json($currency, 200);
    }
}