<?php

namespace App\Domains\Notification\Http\Controllers\Api\Notification;

use App\Http\Controllers\Controller;
use App\Domains\Notification\Models\Notification;
use Illuminate\Http\Request;

/**
 * Class NotificationController.
 */
class NotificationController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/notification",
     * summary="Get All Notifications",
     * description="Show All Notifications",
     * operationId="getAllNotifications",
     * tags={"Notification"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Notification are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="notifiable_id", type="Integer", example="1"),
     *       @OA\Property(property="notifiable_type", type="text", example="1"),
     *       @OA\Property(property="data", type="text", example="1"),
     *       @OA\Property(property="read_at", type="timestamp", example="1"),
     *       @OA\Property(property="objectable_id", type="Integer", example="1"),
     *       @OA\Property(property="objectable_type", type="text", example="1"),
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
        return Notification::all();
    }



    /**
     * @OA\Get(
     * path="/api/notification/{id}",
     * summary="Get Notification by id",
     * description="Show one Notification by id",
     * operationId="getOneNotifications",
     * tags={"notification"},
     * @OA\Parameter(
     *    description="ID of notification",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when notification id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Notification is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="notifiable_id", type="Integer", example="1"),
     *       @OA\Property(property="notifiable_type", type="text", example="1"),
     *       @OA\Property(property="data", type="text", example="1"),
     *       @OA\Property(property="read_at", type="timestamp", example="1"),
     *       @OA\Property(property="objectable_id", type="Integer", example="1"),
     *       @OA\Property(property="objectable_type", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Notification $notification)
    {
        return $notification;
    }

    /**
     * @OA\Post (
     * path="/api/notification",
     * summary="Create New Notification",
     * description="Create One Notification",
     * operationId="postOneNotifications",
     * tags={"notification"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Notification fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="notifiable_id", type="Integer", example="1"),
     *       @OA\Property(property="notifiable_type", type="text", example="1"),
     *       @OA\Property(property="data", type="text", example="1"),
     *       @OA\Property(property="read_at", type="timestamp", example="1"),
     *       @OA\Property(property="objectable_id", type="Integer", example="1"),
     *       @OA\Property(property="objectable_type", type="text", example="1"),
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
     *    description="Returns when Notification has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="notifiable_id", type="Integer", example="1"),
     *       @OA\Property(property="notifiable_type", type="text", example="1"),
     *       @OA\Property(property="data", type="text", example="1"),
     *       @OA\Property(property="read_at", type="timestamp", example="1"),
     *       @OA\Property(property="objectable_id", type="Integer", example="1"),
     *       @OA\Property(property="objectable_type", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $notification = Notification::create($request->all());
        return response()->json($notification, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/notification/{id}",
     * summary="Edit one Notification by id",
     * description="update One Notification by id",
     * operationId="postOneNotifications",
     * tags={"notification"},
     * @OA\Parameter(
     *    description="ID of notification",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Notification fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="notifiable_id", type="Integer", example="1"),
     *       @OA\Property(property="notifiable_type", type="text", example="1"),
     *       @OA\Property(property="data", type="text", example="1"),
     *       @OA\Property(property="read_at", type="timestamp", example="1"),
     *       @OA\Property(property="objectable_id", type="Integer", example="1"),
     *       @OA\Property(property="objectable_type", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Notification has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="notifiable_id", type="Integer", example="1"),
     *       @OA\Property(property="notifiable_type", type="text", example="1"),
     *       @OA\Property(property="data", type="text", example="1"),
     *       @OA\Property(property="read_at", type="timestamp", example="1"),
     *       @OA\Property(property="objectable_id", type="Integer", example="1"),
     *       @OA\Property(property="objectable_type", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Notification $notification)
    {
        $notification->update($request->all());

        return response()->json($notification, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/notification/{id}",
     * summary="delete Notification by id",
     * description="delete one Notification by id",
     * operationId="deleteOneNotifications",
     * tags={"notification"},
     * @OA\Parameter(
     *    description="ID of notification",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when notification id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Notifications are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="notifiable_id", type="Integer", example="1"),
     *       @OA\Property(property="notifiable_type", type="text", example="1"),
     *       @OA\Property(property="data", type="text", example="1"),
     *       @OA\Property(property="read_at", type="timestamp", example="1"),
     *       @OA\Property(property="objectable_id", type="Integer", example="1"),
     *       @OA\Property(property="objectable_type", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Notification $notification)
    {
        $notification->delete();

        return response()->json($notification, 200);
    }
}