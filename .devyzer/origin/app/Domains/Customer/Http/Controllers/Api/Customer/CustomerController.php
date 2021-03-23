<?php

namespace App\Domains\Customer\Http\Controllers\Api\Customer;

use App\Http\Controllers\Controller;
use App\Domains\Customer\Models\Customer;
use Illuminate\Http\Request;

/**
 * Class CustomerController.
 */
class CustomerController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/customer",
     * summary="Get All Customers",
     * description="Show All Customers",
     * operationId="getAllCustomers",
     * tags={"Customer"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customer are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="golden_rule", type="text", example="1"),
     *       @OA\Property(property="mof", type="Integer", example="1"),
     *       @OA\Property(property="vat", type="text", example="1"),
     *       @OA\Property(property="accounting_ref", type="text", example="1"),
     *       @OA\Property(property="discount", type="decimal", example="1"),
     *       @OA\Property(property="quality_check", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="inhouse_note", type="text", example="1"),
     *       @OA\Property(property="submit_account_date", type="datetime", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="payment_method", type="Integer", example="1"),
     *       @OA\Property(property="subscription_type", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="deactivate_reason", type="text", example="1"),
     *       @OA\Property(property="shop_name", type="text", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="default_address_id", type="Integer", example="1"),
     *       @OA\Property(property="waybill", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="email_notifications", type="Integer", example="1"),
     *       @OA\Property(property="sms_notifications", type="Integer", example="1"),
     *       @OA\Property(property="account_manager_id", type="Integer", example="1"),
     *       @OA\Property(property="industry_id", type="Integer", example="1"),
     *       @OA\Property(property="logo", type="blob", example="1"),
     *       @OA\Property(property="online_platform", type="text", example="1"),
     *       @OA\Property(property="established_year", type="year", example="1"),
     *       @OA\Property(property="is_product_delicate", type="Integer", example="1"),
     *       @OA\Property(property="require_bigger_car", type="Integer", example="1"),
     *       @OA\Property(property="pickup_preference", type="Integer", example="1"),
     *       @OA\Property(property="orders_per_month", type="Integer", example="1"),
     *       @OA\Property(property="order_average_value", type="Integer", example="1"),
     *       @OA\Property(property="return_products", type="Integer", example="1"),
     *       @OA\Property(property="beneficiary_name", type="text", example="1"),
     *       @OA\Property(property="official_invoice_needed", type="Integer", example="1"),
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
        return Customer::all();
    }



    /**
     * @OA\Get(
     * path="/api/customer/{id}",
     * summary="Get Customer by id",
     * description="Show one Customer by id",
     * operationId="getOneCustomers",
     * tags={"customer"},
     * @OA\Parameter(
     *    description="ID of customer",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when customer id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customer is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="golden_rule", type="text", example="1"),
     *       @OA\Property(property="mof", type="Integer", example="1"),
     *       @OA\Property(property="vat", type="text", example="1"),
     *       @OA\Property(property="accounting_ref", type="text", example="1"),
     *       @OA\Property(property="discount", type="decimal", example="1"),
     *       @OA\Property(property="quality_check", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="inhouse_note", type="text", example="1"),
     *       @OA\Property(property="submit_account_date", type="datetime", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="payment_method", type="Integer", example="1"),
     *       @OA\Property(property="subscription_type", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="deactivate_reason", type="text", example="1"),
     *       @OA\Property(property="shop_name", type="text", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="default_address_id", type="Integer", example="1"),
     *       @OA\Property(property="waybill", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="email_notifications", type="Integer", example="1"),
     *       @OA\Property(property="sms_notifications", type="Integer", example="1"),
     *       @OA\Property(property="account_manager_id", type="Integer", example="1"),
     *       @OA\Property(property="industry_id", type="Integer", example="1"),
     *       @OA\Property(property="logo", type="blob", example="1"),
     *       @OA\Property(property="online_platform", type="text", example="1"),
     *       @OA\Property(property="established_year", type="year", example="1"),
     *       @OA\Property(property="is_product_delicate", type="Integer", example="1"),
     *       @OA\Property(property="require_bigger_car", type="Integer", example="1"),
     *       @OA\Property(property="pickup_preference", type="Integer", example="1"),
     *       @OA\Property(property="orders_per_month", type="Integer", example="1"),
     *       @OA\Property(property="order_average_value", type="Integer", example="1"),
     *       @OA\Property(property="return_products", type="Integer", example="1"),
     *       @OA\Property(property="beneficiary_name", type="text", example="1"),
     *       @OA\Property(property="official_invoice_needed", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Customer $customer)
    {
        return $customer;
    }

    /**
     * @OA\Post (
     * path="/api/customer",
     * summary="Create New Customer",
     * description="Create One Customer",
     * operationId="postOneCustomers",
     * tags={"customer"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Customer fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="golden_rule", type="text", example="1"),
     *       @OA\Property(property="mof", type="Integer", example="1"),
     *       @OA\Property(property="vat", type="text", example="1"),
     *       @OA\Property(property="accounting_ref", type="text", example="1"),
     *       @OA\Property(property="discount", type="decimal", example="1"),
     *       @OA\Property(property="quality_check", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="inhouse_note", type="text", example="1"),
     *       @OA\Property(property="submit_account_date", type="datetime", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="payment_method", type="Integer", example="1"),
     *       @OA\Property(property="subscription_type", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="deactivate_reason", type="text", example="1"),
     *       @OA\Property(property="shop_name", type="text", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="default_address_id", type="Integer", example="1"),
     *       @OA\Property(property="waybill", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="email_notifications", type="Integer", example="1"),
     *       @OA\Property(property="sms_notifications", type="Integer", example="1"),
     *       @OA\Property(property="account_manager_id", type="Integer", example="1"),
     *       @OA\Property(property="industry_id", type="Integer", example="1"),
     *       @OA\Property(property="logo", type="blob", example="1"),
     *       @OA\Property(property="online_platform", type="text", example="1"),
     *       @OA\Property(property="established_year", type="year", example="1"),
     *       @OA\Property(property="is_product_delicate", type="Integer", example="1"),
     *       @OA\Property(property="require_bigger_car", type="Integer", example="1"),
     *       @OA\Property(property="pickup_preference", type="Integer", example="1"),
     *       @OA\Property(property="orders_per_month", type="Integer", example="1"),
     *       @OA\Property(property="order_average_value", type="Integer", example="1"),
     *       @OA\Property(property="return_products", type="Integer", example="1"),
     *       @OA\Property(property="beneficiary_name", type="text", example="1"),
     *       @OA\Property(property="official_invoice_needed", type="Integer", example="1"),
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
     *    description="Returns when Customer has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="golden_rule", type="text", example="1"),
     *       @OA\Property(property="mof", type="Integer", example="1"),
     *       @OA\Property(property="vat", type="text", example="1"),
     *       @OA\Property(property="accounting_ref", type="text", example="1"),
     *       @OA\Property(property="discount", type="decimal", example="1"),
     *       @OA\Property(property="quality_check", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="inhouse_note", type="text", example="1"),
     *       @OA\Property(property="submit_account_date", type="datetime", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="payment_method", type="Integer", example="1"),
     *       @OA\Property(property="subscription_type", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="deactivate_reason", type="text", example="1"),
     *       @OA\Property(property="shop_name", type="text", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="default_address_id", type="Integer", example="1"),
     *       @OA\Property(property="waybill", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="email_notifications", type="Integer", example="1"),
     *       @OA\Property(property="sms_notifications", type="Integer", example="1"),
     *       @OA\Property(property="account_manager_id", type="Integer", example="1"),
     *       @OA\Property(property="industry_id", type="Integer", example="1"),
     *       @OA\Property(property="logo", type="blob", example="1"),
     *       @OA\Property(property="online_platform", type="text", example="1"),
     *       @OA\Property(property="established_year", type="year", example="1"),
     *       @OA\Property(property="is_product_delicate", type="Integer", example="1"),
     *       @OA\Property(property="require_bigger_car", type="Integer", example="1"),
     *       @OA\Property(property="pickup_preference", type="Integer", example="1"),
     *       @OA\Property(property="orders_per_month", type="Integer", example="1"),
     *       @OA\Property(property="order_average_value", type="Integer", example="1"),
     *       @OA\Property(property="return_products", type="Integer", example="1"),
     *       @OA\Property(property="beneficiary_name", type="text", example="1"),
     *       @OA\Property(property="official_invoice_needed", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $customer = Customer::create($request->all());
        return response()->json($customer, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/customer/{id}",
     * summary="Edit one Customer by id",
     * description="update One Customer by id",
     * operationId="postOneCustomers",
     * tags={"customer"},
     * @OA\Parameter(
     *    description="ID of customer",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Customer fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="golden_rule", type="text", example="1"),
     *       @OA\Property(property="mof", type="Integer", example="1"),
     *       @OA\Property(property="vat", type="text", example="1"),
     *       @OA\Property(property="accounting_ref", type="text", example="1"),
     *       @OA\Property(property="discount", type="decimal", example="1"),
     *       @OA\Property(property="quality_check", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="inhouse_note", type="text", example="1"),
     *       @OA\Property(property="submit_account_date", type="datetime", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="payment_method", type="Integer", example="1"),
     *       @OA\Property(property="subscription_type", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="deactivate_reason", type="text", example="1"),
     *       @OA\Property(property="shop_name", type="text", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="default_address_id", type="Integer", example="1"),
     *       @OA\Property(property="waybill", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="email_notifications", type="Integer", example="1"),
     *       @OA\Property(property="sms_notifications", type="Integer", example="1"),
     *       @OA\Property(property="account_manager_id", type="Integer", example="1"),
     *       @OA\Property(property="industry_id", type="Integer", example="1"),
     *       @OA\Property(property="logo", type="blob", example="1"),
     *       @OA\Property(property="online_platform", type="text", example="1"),
     *       @OA\Property(property="established_year", type="year", example="1"),
     *       @OA\Property(property="is_product_delicate", type="Integer", example="1"),
     *       @OA\Property(property="require_bigger_car", type="Integer", example="1"),
     *       @OA\Property(property="pickup_preference", type="Integer", example="1"),
     *       @OA\Property(property="orders_per_month", type="Integer", example="1"),
     *       @OA\Property(property="order_average_value", type="Integer", example="1"),
     *       @OA\Property(property="return_products", type="Integer", example="1"),
     *       @OA\Property(property="beneficiary_name", type="text", example="1"),
     *       @OA\Property(property="official_invoice_needed", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customer has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="golden_rule", type="text", example="1"),
     *       @OA\Property(property="mof", type="Integer", example="1"),
     *       @OA\Property(property="vat", type="text", example="1"),
     *       @OA\Property(property="accounting_ref", type="text", example="1"),
     *       @OA\Property(property="discount", type="decimal", example="1"),
     *       @OA\Property(property="quality_check", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="inhouse_note", type="text", example="1"),
     *       @OA\Property(property="submit_account_date", type="datetime", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="payment_method", type="Integer", example="1"),
     *       @OA\Property(property="subscription_type", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="deactivate_reason", type="text", example="1"),
     *       @OA\Property(property="shop_name", type="text", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="default_address_id", type="Integer", example="1"),
     *       @OA\Property(property="waybill", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="email_notifications", type="Integer", example="1"),
     *       @OA\Property(property="sms_notifications", type="Integer", example="1"),
     *       @OA\Property(property="account_manager_id", type="Integer", example="1"),
     *       @OA\Property(property="industry_id", type="Integer", example="1"),
     *       @OA\Property(property="logo", type="blob", example="1"),
     *       @OA\Property(property="online_platform", type="text", example="1"),
     *       @OA\Property(property="established_year", type="year", example="1"),
     *       @OA\Property(property="is_product_delicate", type="Integer", example="1"),
     *       @OA\Property(property="require_bigger_car", type="Integer", example="1"),
     *       @OA\Property(property="pickup_preference", type="Integer", example="1"),
     *       @OA\Property(property="orders_per_month", type="Integer", example="1"),
     *       @OA\Property(property="order_average_value", type="Integer", example="1"),
     *       @OA\Property(property="return_products", type="Integer", example="1"),
     *       @OA\Property(property="beneficiary_name", type="text", example="1"),
     *       @OA\Property(property="official_invoice_needed", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());

        return response()->json($customer, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/customer/{id}",
     * summary="delete Customer by id",
     * description="delete one Customer by id",
     * operationId="deleteOneCustomers",
     * tags={"customer"},
     * @OA\Parameter(
     *    description="ID of customer",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when customer id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customers are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="golden_rule", type="text", example="1"),
     *       @OA\Property(property="mof", type="Integer", example="1"),
     *       @OA\Property(property="vat", type="text", example="1"),
     *       @OA\Property(property="accounting_ref", type="text", example="1"),
     *       @OA\Property(property="discount", type="decimal", example="1"),
     *       @OA\Property(property="quality_check", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="inhouse_note", type="text", example="1"),
     *       @OA\Property(property="submit_account_date", type="datetime", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="payment_method", type="Integer", example="1"),
     *       @OA\Property(property="subscription_type", type="Integer", example="1"),
     *       @OA\Property(property="is_active", type="Integer", example="1"),
     *       @OA\Property(property="deactivate_reason", type="text", example="1"),
     *       @OA\Property(property="shop_name", type="text", example="1"),
     *       @OA\Property(property="name", type="text", example="1"),
     *       @OA\Property(property="default_address_id", type="Integer", example="1"),
     *       @OA\Property(property="waybill", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="email_notifications", type="Integer", example="1"),
     *       @OA\Property(property="sms_notifications", type="Integer", example="1"),
     *       @OA\Property(property="account_manager_id", type="Integer", example="1"),
     *       @OA\Property(property="industry_id", type="Integer", example="1"),
     *       @OA\Property(property="logo", type="blob", example="1"),
     *       @OA\Property(property="online_platform", type="text", example="1"),
     *       @OA\Property(property="established_year", type="year", example="1"),
     *       @OA\Property(property="is_product_delicate", type="Integer", example="1"),
     *       @OA\Property(property="require_bigger_car", type="Integer", example="1"),
     *       @OA\Property(property="pickup_preference", type="Integer", example="1"),
     *       @OA\Property(property="orders_per_month", type="Integer", example="1"),
     *       @OA\Property(property="order_average_value", type="Integer", example="1"),
     *       @OA\Property(property="return_products", type="Integer", example="1"),
     *       @OA\Property(property="beneficiary_name", type="text", example="1"),
     *       @OA\Property(property="official_invoice_needed", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Customer $customer)
    {
        $customer->delete();

        return response()->json($customer, 200);
    }
}