<?php

namespace App\Domains\Barcode\Http\Controllers\Api\Barcode;

use App\Http\Controllers\Controller;
use App\Domains\Barcode\Models\Barcode;
use Illuminate\Http\Request;

/**
 * Class BarcodeController.
 */
class BarcodeController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/barcode",
     * summary="Get All Barcodes",
     * description="Show All Barcodes",
     * operationId="getAllBarcodes",
     * tags={"Barcode"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Barcode are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="barcode_order_number", type="text", example="1"),
     *       @OA\Property(property="pickup_order_id", type="Integer", example="1"),
     *       @OA\Property(property="pickup_task_id", type="Integer", example="1"),
     *       @OA\Property(property="pickup_driver_id", type="Integer", example="1"),
     *       @OA\Property(property="delivery_order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="scanned_at", type="datetime", example="1"),
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
        return Barcode::all();
    }



    /**
     * @OA\Get(
     * path="/api/barcode/{id}",
     * summary="Get Barcode by id",
     * description="Show one Barcode by id",
     * operationId="getOneBarcodes",
     * tags={"barcode"},
     * @OA\Parameter(
     *    description="ID of barcode",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when barcode id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Barcode is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="barcode_order_number", type="text", example="1"),
     *       @OA\Property(property="pickup_order_id", type="Integer", example="1"),
     *       @OA\Property(property="pickup_task_id", type="Integer", example="1"),
     *       @OA\Property(property="pickup_driver_id", type="Integer", example="1"),
     *       @OA\Property(property="delivery_order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="scanned_at", type="datetime", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Barcode $barcode)
    {
        return $barcode;
    }

    /**
     * @OA\Post (
     * path="/api/barcode",
     * summary="Create New Barcode",
     * description="Create One Barcode",
     * operationId="postOneBarcodes",
     * tags={"barcode"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Barcode fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="barcode_order_number", type="text", example="1"),
     *       @OA\Property(property="pickup_order_id", type="Integer", example="1"),
     *       @OA\Property(property="pickup_task_id", type="Integer", example="1"),
     *       @OA\Property(property="pickup_driver_id", type="Integer", example="1"),
     *       @OA\Property(property="delivery_order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="scanned_at", type="datetime", example="1"),
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
     *    description="Returns when Barcode has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="barcode_order_number", type="text", example="1"),
     *       @OA\Property(property="pickup_order_id", type="Integer", example="1"),
     *       @OA\Property(property="pickup_task_id", type="Integer", example="1"),
     *       @OA\Property(property="pickup_driver_id", type="Integer", example="1"),
     *       @OA\Property(property="delivery_order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="scanned_at", type="datetime", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $barcode = Barcode::create($request->all());
        return response()->json($barcode, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/barcode/{id}",
     * summary="Edit one Barcode by id",
     * description="update One Barcode by id",
     * operationId="postOneBarcodes",
     * tags={"barcode"},
     * @OA\Parameter(
     *    description="ID of barcode",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Barcode fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="barcode_order_number", type="text", example="1"),
     *       @OA\Property(property="pickup_order_id", type="Integer", example="1"),
     *       @OA\Property(property="pickup_task_id", type="Integer", example="1"),
     *       @OA\Property(property="pickup_driver_id", type="Integer", example="1"),
     *       @OA\Property(property="delivery_order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="scanned_at", type="datetime", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Barcode has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="barcode_order_number", type="text", example="1"),
     *       @OA\Property(property="pickup_order_id", type="Integer", example="1"),
     *       @OA\Property(property="pickup_task_id", type="Integer", example="1"),
     *       @OA\Property(property="pickup_driver_id", type="Integer", example="1"),
     *       @OA\Property(property="delivery_order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="scanned_at", type="datetime", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Barcode $barcode)
    {
        $barcode->update($request->all());

        return response()->json($barcode, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/barcode/{id}",
     * summary="delete Barcode by id",
     * description="delete one Barcode by id",
     * operationId="deleteOneBarcodes",
     * tags={"barcode"},
     * @OA\Parameter(
     *    description="ID of barcode",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when barcode id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Barcodes are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="barcode_order_number", type="text", example="1"),
     *       @OA\Property(property="pickup_order_id", type="Integer", example="1"),
     *       @OA\Property(property="pickup_task_id", type="Integer", example="1"),
     *       @OA\Property(property="pickup_driver_id", type="Integer", example="1"),
     *       @OA\Property(property="delivery_order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="scanned_at", type="datetime", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Barcode $barcode)
    {
        $barcode->delete();

        return response()->json($barcode, 200);
    }
}