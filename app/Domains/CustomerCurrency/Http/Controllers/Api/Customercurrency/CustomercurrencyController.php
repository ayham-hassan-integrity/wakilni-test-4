<?php

namespace App\Domains\CustomerCurrency\Http\Controllers\Api\Customercurrency;

use App\Http\Controllers\Controller;
use App\Domains\CustomerCurrency\Models\Customercurrency;
use Illuminate\Http\Request;

/**
 * Class CustomercurrencyController.
 */
class CustomercurrencyController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/customercurrency",
     * summary="Get All Customercurrencys",
     * description="Show All Customercurrencys",
     * operationId="getAllCustomercurrencys",
     * tags={"Customercurrency"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customercurrency are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
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
        return Customercurrency::all();
    }



    /**
     * @OA\Get(
     * path="/api/customercurrency/{id}",
     * summary="Get Customercurrency by id",
     * description="Show one Customercurrency by id",
     * operationId="getOneCustomercurrencys",
     * tags={"customercurrency"},
     * @OA\Parameter(
     *    description="ID of customercurrency",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when customercurrency id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customercurrency is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="exchange_rate", type="double(8,2)", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Customercurrency $customercurrency)
    {
        return $customercurrency;
    }

    /**
     * @OA\Post (
     * path="/api/customercurrency",
     * summary="Create New Customercurrency",
     * description="Create One Customercurrency",
     * operationId="postOneCustomercurrencys",
     * tags={"customercurrency"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Customercurrency fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
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
     *    description="Returns when Customercurrency has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
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
        $customercurrency = Customercurrency::create($request->all());
        return response()->json($customercurrency, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/customercurrency/{id}",
     * summary="Edit one Customercurrency by id",
     * description="update One Customercurrency by id",
     * operationId="postOneCustomercurrencys",
     * tags={"customercurrency"},
     * @OA\Parameter(
     *    description="ID of customercurrency",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Customercurrency fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="exchange_rate", type="double(8,2)", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customercurrency has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="exchange_rate", type="double(8,2)", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Customercurrency $customercurrency)
    {
        $customercurrency->update($request->all());

        return response()->json($customercurrency, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/customercurrency/{id}",
     * summary="delete Customercurrency by id",
     * description="delete one Customercurrency by id",
     * operationId="deleteOneCustomercurrencys",
     * tags={"customercurrency"},
     * @OA\Parameter(
     *    description="ID of customercurrency",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when customercurrency id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customercurrencys are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="exchange_rate", type="double(8,2)", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Customercurrency $customercurrency)
    {
        $customercurrency->delete();

        return response()->json($customercurrency, 200);
    }
}