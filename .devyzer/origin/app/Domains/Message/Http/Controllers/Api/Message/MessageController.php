<?php

namespace App\Domains\Message\Http\Controllers\Api\Message;

use App\Http\Controllers\Controller;
use App\Domains\Message\Models\Message;
use Illuminate\Http\Request;

/**
 * Class MessageController.
 */
class MessageController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/message",
     * summary="Get All Messages",
     * description="Show All Messages",
     * operationId="getAllMessages",
     * tags={"Message"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Message are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="title", type="text", example="1"),
     *       @OA\Property(property="message", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="receiver_id", type="Integer", example="1"),
     *       @OA\Property(property="sender_id", type="Integer", example="1"),
     *       @OA\Property(property="content_type_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
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
        return Message::all();
    }



    /**
     * @OA\Get(
     * path="/api/message/{id}",
     * summary="Get Message by id",
     * description="Show one Message by id",
     * operationId="getOneMessages",
     * tags={"message"},
     * @OA\Parameter(
     *    description="ID of message",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when message id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Message is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="title", type="text", example="1"),
     *       @OA\Property(property="message", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="receiver_id", type="Integer", example="1"),
     *       @OA\Property(property="sender_id", type="Integer", example="1"),
     *       @OA\Property(property="content_type_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Message $message)
    {
        return $message;
    }

    /**
     * @OA\Post (
     * path="/api/message",
     * summary="Create New Message",
     * description="Create One Message",
     * operationId="postOneMessages",
     * tags={"message"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Message fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="title", type="text", example="1"),
     *       @OA\Property(property="message", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="receiver_id", type="Integer", example="1"),
     *       @OA\Property(property="sender_id", type="Integer", example="1"),
     *       @OA\Property(property="content_type_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
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
     *    description="Returns when Message has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="title", type="text", example="1"),
     *       @OA\Property(property="message", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="receiver_id", type="Integer", example="1"),
     *       @OA\Property(property="sender_id", type="Integer", example="1"),
     *       @OA\Property(property="content_type_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $message = Message::create($request->all());
        return response()->json($message, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/message/{id}",
     * summary="Edit one Message by id",
     * description="update One Message by id",
     * operationId="postOneMessages",
     * tags={"message"},
     * @OA\Parameter(
     *    description="ID of message",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Message fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="title", type="text", example="1"),
     *       @OA\Property(property="message", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="receiver_id", type="Integer", example="1"),
     *       @OA\Property(property="sender_id", type="Integer", example="1"),
     *       @OA\Property(property="content_type_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Message has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="title", type="text", example="1"),
     *       @OA\Property(property="message", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="receiver_id", type="Integer", example="1"),
     *       @OA\Property(property="sender_id", type="Integer", example="1"),
     *       @OA\Property(property="content_type_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Message $message)
    {
        $message->update($request->all());

        return response()->json($message, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/message/{id}",
     * summary="delete Message by id",
     * description="delete one Message by id",
     * operationId="deleteOneMessages",
     * tags={"message"},
     * @OA\Parameter(
     *    description="ID of message",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when message id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Messages are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="title", type="text", example="1"),
     *       @OA\Property(property="message", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="receiver_id", type="Integer", example="1"),
     *       @OA\Property(property="sender_id", type="Integer", example="1"),
     *       @OA\Property(property="content_type_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Message $message)
    {
        $message->delete();

        return response()->json($message, 200);
    }
}