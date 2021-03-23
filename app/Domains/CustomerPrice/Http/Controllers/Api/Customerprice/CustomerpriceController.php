<?php

namespace App\Domains\CustomerPrice\Http\Controllers\Api\Customerprice;

use App\Http\Controllers\Controller;
use App\Domains\CustomerPrice\Models\Customerprice;
use Illuminate\Http\Request;

/**
 * Class CustomerpriceController.
 */
class CustomerpriceController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/customerprice",
     * summary="Get All Customerprices",
     * description="Show All Customerprices",
     * operationId="getAllCustomerprices",
     * tags={"Customerprice"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customerprice are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="minimum_count", type="Integer", example="1"),
     *       @OA\Property(property="maximum_count", type="Integer", example="1"),
     *       @OA\Property(property="price", type="decimal", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="from_zone_id", type="Integer", example="1"),
     *       @OA\Property(property="to_zone_id", type="Integer", example="1"),
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
        return Customerprice::all();
    }



    /**
     * @OA\Get(
     * path="/api/customerprice/{id}",
     * summary="Get Customerprice by id",
     * description="Show one Customerprice by id",
     * operationId="getOneCustomerprices",
     * tags={"customerprice"},
     * @OA\Parameter(
     *    description="ID of customerprice",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when customerprice id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customerprice is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="minimum_count", type="Integer", example="1"),
     *       @OA\Property(property="maximum_count", type="Integer", example="1"),
     *       @OA\Property(property="price", type="decimal", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="from_zone_id", type="Integer", example="1"),
     *       @OA\Property(property="to_zone_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Customerprice $customerprice)
    {
        return $customerprice;
    }

    /**
     * @OA\Post (
     * path="/api/customerprice",
     * summary="Create New Customerprice",
     * description="Create One Customerprice",
     * operationId="postOneCustomerprices",
     * tags={"customerprice"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Customerprice fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="minimum_count", type="Integer", example="1"),
     *       @OA\Property(property="maximum_count", type="Integer", example="1"),
     *       @OA\Property(property="price", type="decimal", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="from_zone_id", type="Integer", example="1"),
     *       @OA\Property(property="to_zone_id", type="Integer", example="1"),
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
     *    description="Returns when Customerprice has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="minimum_count", type="Integer", example="1"),
     *       @OA\Property(property="maximum_count", type="Integer", example="1"),
     *       @OA\Property(property="price", type="decimal", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="from_zone_id", type="Integer", example="1"),
     *       @OA\Property(property="to_zone_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $customerprice = Customerprice::create($request->all());
        return response()->json($customerprice, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/customerprice/{id}",
     * summary="Edit one Customerprice by id",
     * description="update One Customerprice by id",
     * operationId="postOneCustomerprices",
     * tags={"customerprice"},
     * @OA\Parameter(
     *    description="ID of customerprice",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Customerprice fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="minimum_count", type="Integer", example="1"),
     *       @OA\Property(property="maximum_count", type="Integer", example="1"),
     *       @OA\Property(property="price", type="decimal", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="from_zone_id", type="Integer", example="1"),
     *       @OA\Property(property="to_zone_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customerprice has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="minimum_count", type="Integer", example="1"),
     *       @OA\Property(property="maximum_count", type="Integer", example="1"),
     *       @OA\Property(property="price", type="decimal", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="from_zone_id", type="Integer", example="1"),
     *       @OA\Property(property="to_zone_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Customerprice $customerprice)
    {
        $customerprice->update($request->all());

        return response()->json($customerprice, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/customerprice/{id}",
     * summary="delete Customerprice by id",
     * description="delete one Customerprice by id",
     * operationId="deleteOneCustomerprices",
     * tags={"customerprice"},
     * @OA\Parameter(
     *    description="ID of customerprice",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when customerprice id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customerprices are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="minimum_count", type="Integer", example="1"),
     *       @OA\Property(property="maximum_count", type="Integer", example="1"),
     *       @OA\Property(property="price", type="decimal", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="from_zone_id", type="Integer", example="1"),
     *       @OA\Property(property="to_zone_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Customerprice $customerprice)
    {
        $customerprice->delete();

        return response()->json($customerprice, 200);
    }
}