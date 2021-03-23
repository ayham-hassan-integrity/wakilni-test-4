<?php

namespace App\Domains\Payment\Http\Controllers\Api\Payment;

use App\Http\Controllers\Controller;
use App\Domains\Payment\Models\Payment;
use Illuminate\Http\Request;

/**
 * Class PaymentController.
 */
class PaymentController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/payment",
     * summary="Get All Payments",
     * description="Show All Payments",
     * operationId="getAllPayments",
     * tags={"Payment"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Payment are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
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
        return Payment::all();
    }



    /**
     * @OA\Get(
     * path="/api/payment/{id}",
     * summary="Get Payment by id",
     * description="Show one Payment by id",
     * operationId="getOnePayments",
     * tags={"payment"},
     * @OA\Parameter(
     *    description="ID of payment",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when payment id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Payment is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Payment $payment)
    {
        return $payment;
    }

    /**
     * @OA\Post (
     * path="/api/payment",
     * summary="Create New Payment",
     * description="Create One Payment",
     * operationId="postOnePayments",
     * tags={"payment"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Payment fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
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
     *    description="Returns when Payment has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
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
        $payment = Payment::create($request->all());
        return response()->json($payment, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/payment/{id}",
     * summary="Edit one Payment by id",
     * description="update One Payment by id",
     * operationId="postOnePayments",
     * tags={"payment"},
     * @OA\Parameter(
     *    description="ID of payment",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Payment fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Payment has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Payment $payment)
    {
        $payment->update($request->all());

        return response()->json($payment, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/payment/{id}",
     * summary="delete Payment by id",
     * description="delete one Payment by id",
     * operationId="deleteOnePayments",
     * tags={"payment"},
     * @OA\Parameter(
     *    description="ID of payment",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when payment id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Payments are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Payment $payment)
    {
        $payment->delete();

        return response()->json($payment, 200);
    }
}