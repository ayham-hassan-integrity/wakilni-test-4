<?php

namespace App\Domains\OrderDetail\Http\Controllers\Api\Orderdetail;

use App\Http\Controllers\Controller;
use App\Domains\OrderDetail\Models\Orderdetail;
use Illuminate\Http\Request;

/**
 * Class OrderdetailController.
 */
class OrderdetailController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/orderdetail",
     * summary="Get All Orderdetails",
     * description="Show All Orderdetails",
     * operationId="getAllOrderdetails",
     * tags={"Orderdetail"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Orderdetail are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="collection_amount", type="decimal", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="preferred_sender_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_sender_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_sender_to_time", type="time", example="1"),
     *       @OA\Property(property="preferred_receiver_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_receiver_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_receiver_to_time", type="time", example="1"),
     *       @OA\Property(property="require_signature", type="Integer", example="1"),
     *       @OA\Property(property="require_picture", type="Integer", example="1"),
     *       @OA\Property(property="same_package", type="Integer", example="1"),
     *       @OA\Property(property="senderable_id", type="Integer", example="1"),
     *       @OA\Property(property="senderable_type", type="text", example="1"),
     *       @OA\Property(property="receiverable_id", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_type", type="text", example="1"),
     *       @OA\Property(property="payment_type_id", type="Integer", example="1"),
     *       @OA\Property(property="cash_collection_type_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="sender_location_id", type="Integer", example="1"),
     *       @OA\Property(property="receiver_location_id", type="Integer", example="1"),
     *       @OA\Property(property="collection_currency", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="fulfillment_id", type="Integer", example="1"),
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
        return Orderdetail::all();
    }



    /**
     * @OA\Get(
     * path="/api/orderdetail/{id}",
     * summary="Get Orderdetail by id",
     * description="Show one Orderdetail by id",
     * operationId="getOneOrderdetails",
     * tags={"orderdetail"},
     * @OA\Parameter(
     *    description="ID of orderdetail",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when orderdetail id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Orderdetail is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="collection_amount", type="decimal", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="preferred_sender_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_sender_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_sender_to_time", type="time", example="1"),
     *       @OA\Property(property="preferred_receiver_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_receiver_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_receiver_to_time", type="time", example="1"),
     *       @OA\Property(property="require_signature", type="Integer", example="1"),
     *       @OA\Property(property="require_picture", type="Integer", example="1"),
     *       @OA\Property(property="same_package", type="Integer", example="1"),
     *       @OA\Property(property="senderable_id", type="Integer", example="1"),
     *       @OA\Property(property="senderable_type", type="text", example="1"),
     *       @OA\Property(property="receiverable_id", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_type", type="text", example="1"),
     *       @OA\Property(property="payment_type_id", type="Integer", example="1"),
     *       @OA\Property(property="cash_collection_type_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="sender_location_id", type="Integer", example="1"),
     *       @OA\Property(property="receiver_location_id", type="Integer", example="1"),
     *       @OA\Property(property="collection_currency", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="fulfillment_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Orderdetail $orderdetail)
    {
        return $orderdetail;
    }

    /**
     * @OA\Post (
     * path="/api/orderdetail",
     * summary="Create New Orderdetail",
     * description="Create One Orderdetail",
     * operationId="postOneOrderdetails",
     * tags={"orderdetail"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Orderdetail fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="collection_amount", type="decimal", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="preferred_sender_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_sender_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_sender_to_time", type="time", example="1"),
     *       @OA\Property(property="preferred_receiver_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_receiver_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_receiver_to_time", type="time", example="1"),
     *       @OA\Property(property="require_signature", type="Integer", example="1"),
     *       @OA\Property(property="require_picture", type="Integer", example="1"),
     *       @OA\Property(property="same_package", type="Integer", example="1"),
     *       @OA\Property(property="senderable_id", type="Integer", example="1"),
     *       @OA\Property(property="senderable_type", type="text", example="1"),
     *       @OA\Property(property="receiverable_id", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_type", type="text", example="1"),
     *       @OA\Property(property="payment_type_id", type="Integer", example="1"),
     *       @OA\Property(property="cash_collection_type_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="sender_location_id", type="Integer", example="1"),
     *       @OA\Property(property="receiver_location_id", type="Integer", example="1"),
     *       @OA\Property(property="collection_currency", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="fulfillment_id", type="Integer", example="1"),
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
     *    description="Returns when Orderdetail has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="collection_amount", type="decimal", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="preferred_sender_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_sender_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_sender_to_time", type="time", example="1"),
     *       @OA\Property(property="preferred_receiver_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_receiver_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_receiver_to_time", type="time", example="1"),
     *       @OA\Property(property="require_signature", type="Integer", example="1"),
     *       @OA\Property(property="require_picture", type="Integer", example="1"),
     *       @OA\Property(property="same_package", type="Integer", example="1"),
     *       @OA\Property(property="senderable_id", type="Integer", example="1"),
     *       @OA\Property(property="senderable_type", type="text", example="1"),
     *       @OA\Property(property="receiverable_id", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_type", type="text", example="1"),
     *       @OA\Property(property="payment_type_id", type="Integer", example="1"),
     *       @OA\Property(property="cash_collection_type_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="sender_location_id", type="Integer", example="1"),
     *       @OA\Property(property="receiver_location_id", type="Integer", example="1"),
     *       @OA\Property(property="collection_currency", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="fulfillment_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $orderdetail = Orderdetail::create($request->all());
        return response()->json($orderdetail, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/orderdetail/{id}",
     * summary="Edit one Orderdetail by id",
     * description="update One Orderdetail by id",
     * operationId="postOneOrderdetails",
     * tags={"orderdetail"},
     * @OA\Parameter(
     *    description="ID of orderdetail",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Orderdetail fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="collection_amount", type="decimal", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="preferred_sender_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_sender_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_sender_to_time", type="time", example="1"),
     *       @OA\Property(property="preferred_receiver_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_receiver_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_receiver_to_time", type="time", example="1"),
     *       @OA\Property(property="require_signature", type="Integer", example="1"),
     *       @OA\Property(property="require_picture", type="Integer", example="1"),
     *       @OA\Property(property="same_package", type="Integer", example="1"),
     *       @OA\Property(property="senderable_id", type="Integer", example="1"),
     *       @OA\Property(property="senderable_type", type="text", example="1"),
     *       @OA\Property(property="receiverable_id", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_type", type="text", example="1"),
     *       @OA\Property(property="payment_type_id", type="Integer", example="1"),
     *       @OA\Property(property="cash_collection_type_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="sender_location_id", type="Integer", example="1"),
     *       @OA\Property(property="receiver_location_id", type="Integer", example="1"),
     *       @OA\Property(property="collection_currency", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="fulfillment_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Orderdetail has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="collection_amount", type="decimal", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="preferred_sender_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_sender_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_sender_to_time", type="time", example="1"),
     *       @OA\Property(property="preferred_receiver_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_receiver_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_receiver_to_time", type="time", example="1"),
     *       @OA\Property(property="require_signature", type="Integer", example="1"),
     *       @OA\Property(property="require_picture", type="Integer", example="1"),
     *       @OA\Property(property="same_package", type="Integer", example="1"),
     *       @OA\Property(property="senderable_id", type="Integer", example="1"),
     *       @OA\Property(property="senderable_type", type="text", example="1"),
     *       @OA\Property(property="receiverable_id", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_type", type="text", example="1"),
     *       @OA\Property(property="payment_type_id", type="Integer", example="1"),
     *       @OA\Property(property="cash_collection_type_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="sender_location_id", type="Integer", example="1"),
     *       @OA\Property(property="receiver_location_id", type="Integer", example="1"),
     *       @OA\Property(property="collection_currency", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="fulfillment_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Orderdetail $orderdetail)
    {
        $orderdetail->update($request->all());

        return response()->json($orderdetail, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/orderdetail/{id}",
     * summary="delete Orderdetail by id",
     * description="delete one Orderdetail by id",
     * operationId="deleteOneOrderdetails",
     * tags={"orderdetail"},
     * @OA\Parameter(
     *    description="ID of orderdetail",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when orderdetail id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Orderdetails are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="collection_amount", type="decimal", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="preferred_sender_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_sender_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_sender_to_time", type="time", example="1"),
     *       @OA\Property(property="preferred_receiver_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_receiver_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_receiver_to_time", type="time", example="1"),
     *       @OA\Property(property="require_signature", type="Integer", example="1"),
     *       @OA\Property(property="require_picture", type="Integer", example="1"),
     *       @OA\Property(property="same_package", type="Integer", example="1"),
     *       @OA\Property(property="senderable_id", type="Integer", example="1"),
     *       @OA\Property(property="senderable_type", type="text", example="1"),
     *       @OA\Property(property="receiverable_id", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_type", type="text", example="1"),
     *       @OA\Property(property="payment_type_id", type="Integer", example="1"),
     *       @OA\Property(property="cash_collection_type_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="sender_location_id", type="Integer", example="1"),
     *       @OA\Property(property="receiver_location_id", type="Integer", example="1"),
     *       @OA\Property(property="collection_currency", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="fulfillment_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Orderdetail $orderdetail)
    {
        $orderdetail->delete();

        return response()->json($orderdetail, 200);
    }
}