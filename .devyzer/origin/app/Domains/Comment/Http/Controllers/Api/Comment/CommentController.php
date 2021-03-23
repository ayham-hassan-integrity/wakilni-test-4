<?php

namespace App\Domains\Comment\Http\Controllers\Api\Comment;

use App\Http\Controllers\Controller;
use App\Domains\Comment\Models\Comment;
use Illuminate\Http\Request;

/**
 * Class CommentController.
 */
class CommentController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/comment",
     * summary="Get All Comments",
     * description="Show All Comments",
     * operationId="getAllComments",
     * tags={"Comment"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Comment are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="comment", type="text", example="1"),
     *       @OA\Property(property="is_public", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
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
        return Comment::all();
    }



    /**
     * @OA\Get(
     * path="/api/comment/{id}",
     * summary="Get Comment by id",
     * description="Show one Comment by id",
     * operationId="getOneComments",
     * tags={"comment"},
     * @OA\Parameter(
     *    description="ID of comment",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when comment id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Comment is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="comment", type="text", example="1"),
     *       @OA\Property(property="is_public", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Comment $comment)
    {
        return $comment;
    }

    /**
     * @OA\Post (
     * path="/api/comment",
     * summary="Create New Comment",
     * description="Create One Comment",
     * operationId="postOneComments",
     * tags={"comment"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Comment fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="comment", type="text", example="1"),
     *       @OA\Property(property="is_public", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
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
     *    description="Returns when Comment has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="comment", type="text", example="1"),
     *       @OA\Property(property="is_public", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $comment = Comment::create($request->all());
        return response()->json($comment, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/comment/{id}",
     * summary="Edit one Comment by id",
     * description="update One Comment by id",
     * operationId="postOneComments",
     * tags={"comment"},
     * @OA\Parameter(
     *    description="ID of comment",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Comment fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="comment", type="text", example="1"),
     *       @OA\Property(property="is_public", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Comment has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="comment", type="text", example="1"),
     *       @OA\Property(property="is_public", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->all());

        return response()->json($comment, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/comment/{id}",
     * summary="delete Comment by id",
     * description="delete one Comment by id",
     * operationId="deleteOneComments",
     * tags={"comment"},
     * @OA\Parameter(
     *    description="ID of comment",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when comment id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Comments are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="comment", type="text", example="1"),
     *       @OA\Property(property="is_public", type="Integer", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Comment $comment)
    {
        $comment->delete();

        return response()->json($comment, 200);
    }
}