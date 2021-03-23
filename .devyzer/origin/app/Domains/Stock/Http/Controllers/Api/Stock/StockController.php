<?php

namespace App\Domains\Stock\Http\Controllers\Api\Stock;

use App\Http\Controllers\Controller;
use App\Domains\Stock\Models\Stock;
use Illuminate\Http\Request;

/**
 * Class StockController.
 */
class StockController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/stock",
     * summary="Get All Stocks",
     * description="Show All Stocks",
     * operationId="getAllStocks",
     * tags={"Stock"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Stock are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="size_id", type="Integer", example="1"),
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
        return Stock::all();
    }



    /**
     * @OA\Get(
     * path="/api/stock/{id}",
     * summary="Get Stock by id",
     * description="Show one Stock by id",
     * operationId="getOneStocks",
     * tags={"stock"},
     * @OA\Parameter(
     *    description="ID of stock",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when stock id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Stock is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="size_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Stock $stock)
    {
        return $stock;
    }

    /**
     * @OA\Post (
     * path="/api/stock",
     * summary="Create New Stock",
     * description="Create One Stock",
     * operationId="postOneStocks",
     * tags={"stock"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Stock fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="size_id", type="Integer", example="1"),
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
     *    description="Returns when Stock has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="size_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $stock = Stock::create($request->all());
        return response()->json($stock, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/stock/{id}",
     * summary="Edit one Stock by id",
     * description="update One Stock by id",
     * operationId="postOneStocks",
     * tags={"stock"},
     * @OA\Parameter(
     *    description="ID of stock",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Stock fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="size_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Stock has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="size_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Stock $stock)
    {
        $stock->update($request->all());

        return response()->json($stock, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/stock/{id}",
     * summary="delete Stock by id",
     * description="delete one Stock by id",
     * operationId="deleteOneStocks",
     * tags={"stock"},
     * @OA\Parameter(
     *    description="ID of stock",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when stock id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Stocks are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="label", type="text", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="size_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Stock $stock)
    {
        $stock->delete();

        return response()->json($stock, 200);
    }
}