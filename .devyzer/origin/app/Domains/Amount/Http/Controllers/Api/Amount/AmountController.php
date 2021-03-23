<?php

namespace App\Domains\Amount\Http\Controllers\Api\Amount;

use App\Http\Controllers\Controller;
use App\Domains\Amount\Models\Amount;
use Illuminate\Http\Request;

/**
 * Class AmountController.
 */
class AmountController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/amount",
     * summary="Get All Amounts",
     * description="Show All Amounts",
     * operationId="getAllAmounts",
     * tags={"Amount"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Amount are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
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
        return Amount::all();
    }



    /**
     * @OA\Get(
     * path="/api/amount/{id}",
     * summary="Get Amount by id",
     * description="Show one Amount by id",
     * operationId="getOneAmounts",
     * tags={"amount"},
     * @OA\Parameter(
     *    description="ID of amount",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when amount id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Amount is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Amount $amount)
    {
        return $amount;
    }

    /**
     * @OA\Post (
     * path="/api/amount",
     * summary="Create New Amount",
     * description="Create One Amount",
     * operationId="postOneAmounts",
     * tags={"amount"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Amount fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
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
     *    description="Returns when Amount has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
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
        $amount = Amount::create($request->all());
        return response()->json($amount, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/amount/{id}",
     * summary="Edit one Amount by id",
     * description="update One Amount by id",
     * operationId="postOneAmounts",
     * tags={"amount"},
     * @OA\Parameter(
     *    description="ID of amount",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Amount fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Amount has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Amount $amount)
    {
        $amount->update($request->all());

        return response()->json($amount, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/amount/{id}",
     * summary="delete Amount by id",
     * description="delete one Amount by id",
     * operationId="deleteOneAmounts",
     * tags={"amount"},
     * @OA\Parameter(
     *    description="ID of amount",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when amount id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Amounts are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Amount $amount)
    {
        $amount->delete();

        return response()->json($amount, 200);
    }
}