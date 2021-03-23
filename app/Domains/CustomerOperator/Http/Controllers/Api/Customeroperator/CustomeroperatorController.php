<?php

namespace App\Domains\CustomerOperator\Http\Controllers\Api\Customeroperator;

use App\Http\Controllers\Controller;
use App\Domains\CustomerOperator\Models\Customeroperator;
use Illuminate\Http\Request;

/**
 * Class CustomeroperatorController.
 */
class CustomeroperatorController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/customeroperator",
     * summary="Get All Customeroperators",
     * description="Show All Customeroperators",
     * operationId="getAllCustomeroperators",
     * tags={"Customeroperator"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customeroperator are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="operator_id", type="Integer", example="1"),
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
        return Customeroperator::all();
    }



    /**
     * @OA\Get(
     * path="/api/customeroperator/{id}",
     * summary="Get Customeroperator by id",
     * description="Show one Customeroperator by id",
     * operationId="getOneCustomeroperators",
     * tags={"customeroperator"},
     * @OA\Parameter(
     *    description="ID of customeroperator",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when customeroperator id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customeroperator is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="operator_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Customeroperator $customeroperator)
    {
        return $customeroperator;
    }

    /**
     * @OA\Post (
     * path="/api/customeroperator",
     * summary="Create New Customeroperator",
     * description="Create One Customeroperator",
     * operationId="postOneCustomeroperators",
     * tags={"customeroperator"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Customeroperator fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="operator_id", type="Integer", example="1"),
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
     *    description="Returns when Customeroperator has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="operator_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $customeroperator = Customeroperator::create($request->all());
        return response()->json($customeroperator, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/customeroperator/{id}",
     * summary="Edit one Customeroperator by id",
     * description="update One Customeroperator by id",
     * operationId="postOneCustomeroperators",
     * tags={"customeroperator"},
     * @OA\Parameter(
     *    description="ID of customeroperator",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Customeroperator fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="operator_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customeroperator has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="operator_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Customeroperator $customeroperator)
    {
        $customeroperator->update($request->all());

        return response()->json($customeroperator, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/customeroperator/{id}",
     * summary="delete Customeroperator by id",
     * description="delete one Customeroperator by id",
     * operationId="deleteOneCustomeroperators",
     * tags={"customeroperator"},
     * @OA\Parameter(
     *    description="ID of customeroperator",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when customeroperator id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Customeroperators are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="operator_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Customeroperator $customeroperator)
    {
        $customeroperator->delete();

        return response()->json($customeroperator, 200);
    }
}