<?php

namespace App\Domains\Review\Http\Controllers\Api\Review;

use App\Http\Controllers\Controller;
use App\Domains\Review\Models\Review;
use Illuminate\Http\Request;

/**
 * Class ReviewController.
 */
class ReviewController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/review",
     * summary="Get All Reviews",
     * description="Show All Reviews",
     * operationId="getAllReviews",
     * tags={"Review"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Review are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="recipient_id", type="Integer", example="1"),
     *       @OA\Property(property="rate", type="Integer", example="1"),
     *       @OA\Property(property="feedback_message", type="text", example="1"),
     *       @OA\Property(property="viewed", type="Integer", example="1"),
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
        return Review::all();
    }



    /**
     * @OA\Get(
     * path="/api/review/{id}",
     * summary="Get Review by id",
     * description="Show one Review by id",
     * operationId="getOneReviews",
     * tags={"review"},
     * @OA\Parameter(
     *    description="ID of review",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when review id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Review is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="recipient_id", type="Integer", example="1"),
     *       @OA\Property(property="rate", type="Integer", example="1"),
     *       @OA\Property(property="feedback_message", type="text", example="1"),
     *       @OA\Property(property="viewed", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Review $review)
    {
        return $review;
    }

    /**
     * @OA\Post (
     * path="/api/review",
     * summary="Create New Review",
     * description="Create One Review",
     * operationId="postOneReviews",
     * tags={"review"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Review fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="recipient_id", type="Integer", example="1"),
     *       @OA\Property(property="rate", type="Integer", example="1"),
     *       @OA\Property(property="feedback_message", type="text", example="1"),
     *       @OA\Property(property="viewed", type="Integer", example="1"),
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
     *    description="Returns when Review has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="recipient_id", type="Integer", example="1"),
     *       @OA\Property(property="rate", type="Integer", example="1"),
     *       @OA\Property(property="feedback_message", type="text", example="1"),
     *       @OA\Property(property="viewed", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $review = Review::create($request->all());
        return response()->json($review, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/review/{id}",
     * summary="Edit one Review by id",
     * description="update One Review by id",
     * operationId="postOneReviews",
     * tags={"review"},
     * @OA\Parameter(
     *    description="ID of review",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Review fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="recipient_id", type="Integer", example="1"),
     *       @OA\Property(property="rate", type="Integer", example="1"),
     *       @OA\Property(property="feedback_message", type="text", example="1"),
     *       @OA\Property(property="viewed", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Review has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="recipient_id", type="Integer", example="1"),
     *       @OA\Property(property="rate", type="Integer", example="1"),
     *       @OA\Property(property="feedback_message", type="text", example="1"),
     *       @OA\Property(property="viewed", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Review $review)
    {
        $review->update($request->all());

        return response()->json($review, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/review/{id}",
     * summary="delete Review by id",
     * description="delete one Review by id",
     * operationId="deleteOneReviews",
     * tags={"review"},
     * @OA\Parameter(
     *    description="ID of review",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when review id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Reviews are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="recipient_id", type="Integer", example="1"),
     *       @OA\Property(property="rate", type="Integer", example="1"),
     *       @OA\Property(property="feedback_message", type="text", example="1"),
     *       @OA\Property(property="viewed", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Review $review)
    {
        $review->delete();

        return response()->json($review, 200);
    }
}