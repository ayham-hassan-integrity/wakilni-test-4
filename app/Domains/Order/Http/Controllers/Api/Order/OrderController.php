<?php

namespace App\Domains\Order\Http\Controllers\Api\Order;

use App\Http\Controllers\Controller;
use App\Domains\Order\Models\Order;
use Illuminate\Http\Request;

/**
 * Class OrderController.
 */
class OrderController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/order",
     * summary="Get All Orders",
     * description="Show All Orders",
     * operationId="getAllOrders",
     * tags={"Order"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Order are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_number", type="text", example="1"),
     *       @OA\Property(property="rate", type="Integer", example="1"),
     *       @OA\Property(property="completed_on", type="datetime", example="1"),
     *       @OA\Property(property="payment_status", type="Integer", example="1"),
     *       @OA\Property(property="package_status", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="status_updated_at", type="datetime", example="1"),
     *       @OA\Property(property="remaining_balance", type="decimal", example="1"),
     *       @OA\Property(property="price", type="decimal", example="1"),
     *       @OA\Property(property="parent_id", type="Integer", example="1"),
     *       @OA\Property(property="order_details_id", type="Integer", example="1"),
     *       @OA\Property(property="comment_id", type="Integer", example="1"),
     *       @OA\Property(property="waybill", type="text", example="1"),
     *       @OA\Property(property="allow_receiver_contact", type="Integer", example="1"),
     *       @OA\Property(property="send_receiver_msg", type="Integer", example="1"),
     *       @OA\Property(property="car_needed", type="Integer", example="1"),
     *       @OA\Property(property="settled_with_wakilni", type="Integer", example="1"),
     *       @OA\Property(property="settled_with_customer", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="active", type="Integer", example="1"),
     *       @OA\Property(property="is_critical", type="Integer", example="1"),
     *       @OA\Property(property="become_critical_date", type="datetime", example="1"),
     *       @OA\Property(property="confirmed_at", type="datetime", example="1"),
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
        return Order::all();
    }



    /**
     * @OA\Get(
     * path="/api/order/{id}",
     * summary="Get Order by id",
     * description="Show one Order by id",
     * operationId="getOneOrders",
     * tags={"order"},
     * @OA\Parameter(
     *    description="ID of order",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when order id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Order is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_number", type="text", example="1"),
     *       @OA\Property(property="rate", type="Integer", example="1"),
     *       @OA\Property(property="completed_on", type="datetime", example="1"),
     *       @OA\Property(property="payment_status", type="Integer", example="1"),
     *       @OA\Property(property="package_status", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="status_updated_at", type="datetime", example="1"),
     *       @OA\Property(property="remaining_balance", type="decimal", example="1"),
     *       @OA\Property(property="price", type="decimal", example="1"),
     *       @OA\Property(property="parent_id", type="Integer", example="1"),
     *       @OA\Property(property="order_details_id", type="Integer", example="1"),
     *       @OA\Property(property="comment_id", type="Integer", example="1"),
     *       @OA\Property(property="waybill", type="text", example="1"),
     *       @OA\Property(property="allow_receiver_contact", type="Integer", example="1"),
     *       @OA\Property(property="send_receiver_msg", type="Integer", example="1"),
     *       @OA\Property(property="car_needed", type="Integer", example="1"),
     *       @OA\Property(property="settled_with_wakilni", type="Integer", example="1"),
     *       @OA\Property(property="settled_with_customer", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="active", type="Integer", example="1"),
     *       @OA\Property(property="is_critical", type="Integer", example="1"),
     *       @OA\Property(property="become_critical_date", type="datetime", example="1"),
     *       @OA\Property(property="confirmed_at", type="datetime", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Order $order)
    {
        return $order;
    }

    /**
     * @OA\Post (
     * path="/api/order",
     * summary="Create New Order",
     * description="Create One Order",
     * operationId="postOneOrders",
     * tags={"order"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Order fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_number", type="text", example="1"),
     *       @OA\Property(property="rate", type="Integer", example="1"),
     *       @OA\Property(property="completed_on", type="datetime", example="1"),
     *       @OA\Property(property="payment_status", type="Integer", example="1"),
     *       @OA\Property(property="package_status", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="status_updated_at", type="datetime", example="1"),
     *       @OA\Property(property="remaining_balance", type="decimal", example="1"),
     *       @OA\Property(property="price", type="decimal", example="1"),
     *       @OA\Property(property="parent_id", type="Integer", example="1"),
     *       @OA\Property(property="order_details_id", type="Integer", example="1"),
     *       @OA\Property(property="comment_id", type="Integer", example="1"),
     *       @OA\Property(property="waybill", type="text", example="1"),
     *       @OA\Property(property="allow_receiver_contact", type="Integer", example="1"),
     *       @OA\Property(property="send_receiver_msg", type="Integer", example="1"),
     *       @OA\Property(property="car_needed", type="Integer", example="1"),
     *       @OA\Property(property="settled_with_wakilni", type="Integer", example="1"),
     *       @OA\Property(property="settled_with_customer", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="active", type="Integer", example="1"),
     *       @OA\Property(property="is_critical", type="Integer", example="1"),
     *       @OA\Property(property="become_critical_date", type="datetime", example="1"),
     *       @OA\Property(property="confirmed_at", type="datetime", example="1"),
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
     *    description="Returns when Order has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_number", type="text", example="1"),
     *       @OA\Property(property="rate", type="Integer", example="1"),
     *       @OA\Property(property="completed_on", type="datetime", example="1"),
     *       @OA\Property(property="payment_status", type="Integer", example="1"),
     *       @OA\Property(property="package_status", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="status_updated_at", type="datetime", example="1"),
     *       @OA\Property(property="remaining_balance", type="decimal", example="1"),
     *       @OA\Property(property="price", type="decimal", example="1"),
     *       @OA\Property(property="parent_id", type="Integer", example="1"),
     *       @OA\Property(property="order_details_id", type="Integer", example="1"),
     *       @OA\Property(property="comment_id", type="Integer", example="1"),
     *       @OA\Property(property="waybill", type="text", example="1"),
     *       @OA\Property(property="allow_receiver_contact", type="Integer", example="1"),
     *       @OA\Property(property="send_receiver_msg", type="Integer", example="1"),
     *       @OA\Property(property="car_needed", type="Integer", example="1"),
     *       @OA\Property(property="settled_with_wakilni", type="Integer", example="1"),
     *       @OA\Property(property="settled_with_customer", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="active", type="Integer", example="1"),
     *       @OA\Property(property="is_critical", type="Integer", example="1"),
     *       @OA\Property(property="become_critical_date", type="datetime", example="1"),
     *       @OA\Property(property="confirmed_at", type="datetime", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $order = Order::create($request->all());
        return response()->json($order, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/order/{id}",
     * summary="Edit one Order by id",
     * description="update One Order by id",
     * operationId="postOneOrders",
     * tags={"order"},
     * @OA\Parameter(
     *    description="ID of order",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Order fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_number", type="text", example="1"),
     *       @OA\Property(property="rate", type="Integer", example="1"),
     *       @OA\Property(property="completed_on", type="datetime", example="1"),
     *       @OA\Property(property="payment_status", type="Integer", example="1"),
     *       @OA\Property(property="package_status", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="status_updated_at", type="datetime", example="1"),
     *       @OA\Property(property="remaining_balance", type="decimal", example="1"),
     *       @OA\Property(property="price", type="decimal", example="1"),
     *       @OA\Property(property="parent_id", type="Integer", example="1"),
     *       @OA\Property(property="order_details_id", type="Integer", example="1"),
     *       @OA\Property(property="comment_id", type="Integer", example="1"),
     *       @OA\Property(property="waybill", type="text", example="1"),
     *       @OA\Property(property="allow_receiver_contact", type="Integer", example="1"),
     *       @OA\Property(property="send_receiver_msg", type="Integer", example="1"),
     *       @OA\Property(property="car_needed", type="Integer", example="1"),
     *       @OA\Property(property="settled_with_wakilni", type="Integer", example="1"),
     *       @OA\Property(property="settled_with_customer", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="active", type="Integer", example="1"),
     *       @OA\Property(property="is_critical", type="Integer", example="1"),
     *       @OA\Property(property="become_critical_date", type="datetime", example="1"),
     *       @OA\Property(property="confirmed_at", type="datetime", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Order has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_number", type="text", example="1"),
     *       @OA\Property(property="rate", type="Integer", example="1"),
     *       @OA\Property(property="completed_on", type="datetime", example="1"),
     *       @OA\Property(property="payment_status", type="Integer", example="1"),
     *       @OA\Property(property="package_status", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="status_updated_at", type="datetime", example="1"),
     *       @OA\Property(property="remaining_balance", type="decimal", example="1"),
     *       @OA\Property(property="price", type="decimal", example="1"),
     *       @OA\Property(property="parent_id", type="Integer", example="1"),
     *       @OA\Property(property="order_details_id", type="Integer", example="1"),
     *       @OA\Property(property="comment_id", type="Integer", example="1"),
     *       @OA\Property(property="waybill", type="text", example="1"),
     *       @OA\Property(property="allow_receiver_contact", type="Integer", example="1"),
     *       @OA\Property(property="send_receiver_msg", type="Integer", example="1"),
     *       @OA\Property(property="car_needed", type="Integer", example="1"),
     *       @OA\Property(property="settled_with_wakilni", type="Integer", example="1"),
     *       @OA\Property(property="settled_with_customer", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="active", type="Integer", example="1"),
     *       @OA\Property(property="is_critical", type="Integer", example="1"),
     *       @OA\Property(property="become_critical_date", type="datetime", example="1"),
     *       @OA\Property(property="confirmed_at", type="datetime", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Order $order)
    {
        $order->update($request->all());

        return response()->json($order, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/order/{id}",
     * summary="delete Order by id",
     * description="delete one Order by id",
     * operationId="deleteOneOrders",
     * tags={"order"},
     * @OA\Parameter(
     *    description="ID of order",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when order id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Orders are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_number", type="text", example="1"),
     *       @OA\Property(property="rate", type="Integer", example="1"),
     *       @OA\Property(property="completed_on", type="datetime", example="1"),
     *       @OA\Property(property="payment_status", type="Integer", example="1"),
     *       @OA\Property(property="package_status", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="status_updated_at", type="datetime", example="1"),
     *       @OA\Property(property="remaining_balance", type="decimal", example="1"),
     *       @OA\Property(property="price", type="decimal", example="1"),
     *       @OA\Property(property="parent_id", type="Integer", example="1"),
     *       @OA\Property(property="order_details_id", type="Integer", example="1"),
     *       @OA\Property(property="comment_id", type="Integer", example="1"),
     *       @OA\Property(property="waybill", type="text", example="1"),
     *       @OA\Property(property="allow_receiver_contact", type="Integer", example="1"),
     *       @OA\Property(property="send_receiver_msg", type="Integer", example="1"),
     *       @OA\Property(property="car_needed", type="Integer", example="1"),
     *       @OA\Property(property="settled_with_wakilni", type="Integer", example="1"),
     *       @OA\Property(property="settled_with_customer", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="active", type="Integer", example="1"),
     *       @OA\Property(property="is_critical", type="Integer", example="1"),
     *       @OA\Property(property="become_critical_date", type="datetime", example="1"),
     *       @OA\Property(property="confirmed_at", type="datetime", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Order $order)
    {
        $order->delete();

        return response()->json($order, 200);
    }
}