<?php

namespace App\Domains\Task\Http\Controllers\Api\Task;

use App\Http\Controllers\Controller;
use App\Domains\Task\Models\Task;
use Illuminate\Http\Request;

/**
 * Class TaskController.
 */
class TaskController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/task",
     * summary="Get All Tasks",
     * description="Show All Tasks",
     * operationId="getAllTasks",
     * tags={"Task"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Task are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="sequence", type="Integer", example="1"),
     *       @OA\Property(property="overall_sequence", type="Integer", example="1"),
     *       @OA\Property(property="deliver_amount", type="decimal", example="1"),
     *       @OA\Property(property="receive_amount", type="decimal", example="1"),
     *       @OA\Property(property="deliver_package", type="text", example="1"),
     *       @OA\Property(property="receive_package", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="fail_reason", type="text", example="1"),
     *       @OA\Property(property="collection_note", type="text", example="1"),
     *       @OA\Property(property="preferred_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_to_time", type="time", example="1"),
     *       @OA\Property(property="collection_date", type="datetime", example="1"),
     *       @OA\Property(property="require_signature", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="submitted", type="Integer", example="1"),
     *       @OA\Property(property="secured", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_id", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_type", type="text", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="require_picture", type="Integer", example="1"),
     *       @OA\Property(property="picture_id", type="Integer", example="1"),
     *       @OA\Property(property="signature_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="vehicle_id", type="Integer", example="1"),
     *       @OA\Property(property="receive_price", type="decimal", example="1"),
     *       @OA\Property(property="deliver_amount_currency_rate", type="double", example="1"),
     *       @OA\Property(property="receive_amount_currency_rate", type="double", example="1"),
     *       @OA\Property(property="amount_currency", type="Integer", example="1"),
     *       @OA\Property(property="price_currency", type="Integer", example="1"),
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
        return Task::all();
    }



    /**
     * @OA\Get(
     * path="/api/task/{id}",
     * summary="Get Task by id",
     * description="Show one Task by id",
     * operationId="getOneTasks",
     * tags={"task"},
     * @OA\Parameter(
     *    description="ID of task",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when task id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Task is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="sequence", type="Integer", example="1"),
     *       @OA\Property(property="overall_sequence", type="Integer", example="1"),
     *       @OA\Property(property="deliver_amount", type="decimal", example="1"),
     *       @OA\Property(property="receive_amount", type="decimal", example="1"),
     *       @OA\Property(property="deliver_package", type="text", example="1"),
     *       @OA\Property(property="receive_package", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="fail_reason", type="text", example="1"),
     *       @OA\Property(property="collection_note", type="text", example="1"),
     *       @OA\Property(property="preferred_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_to_time", type="time", example="1"),
     *       @OA\Property(property="collection_date", type="datetime", example="1"),
     *       @OA\Property(property="require_signature", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="submitted", type="Integer", example="1"),
     *       @OA\Property(property="secured", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_id", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_type", type="text", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="require_picture", type="Integer", example="1"),
     *       @OA\Property(property="picture_id", type="Integer", example="1"),
     *       @OA\Property(property="signature_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="vehicle_id", type="Integer", example="1"),
     *       @OA\Property(property="receive_price", type="decimal", example="1"),
     *       @OA\Property(property="deliver_amount_currency_rate", type="double", example="1"),
     *       @OA\Property(property="receive_amount_currency_rate", type="double", example="1"),
     *       @OA\Property(property="amount_currency", type="Integer", example="1"),
     *       @OA\Property(property="price_currency", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Task $task)
    {
        return $task;
    }

    /**
     * @OA\Post (
     * path="/api/task",
     * summary="Create New Task",
     * description="Create One Task",
     * operationId="postOneTasks",
     * tags={"task"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Task fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="sequence", type="Integer", example="1"),
     *       @OA\Property(property="overall_sequence", type="Integer", example="1"),
     *       @OA\Property(property="deliver_amount", type="decimal", example="1"),
     *       @OA\Property(property="receive_amount", type="decimal", example="1"),
     *       @OA\Property(property="deliver_package", type="text", example="1"),
     *       @OA\Property(property="receive_package", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="fail_reason", type="text", example="1"),
     *       @OA\Property(property="collection_note", type="text", example="1"),
     *       @OA\Property(property="preferred_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_to_time", type="time", example="1"),
     *       @OA\Property(property="collection_date", type="datetime", example="1"),
     *       @OA\Property(property="require_signature", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="submitted", type="Integer", example="1"),
     *       @OA\Property(property="secured", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_id", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_type", type="text", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="require_picture", type="Integer", example="1"),
     *       @OA\Property(property="picture_id", type="Integer", example="1"),
     *       @OA\Property(property="signature_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="vehicle_id", type="Integer", example="1"),
     *       @OA\Property(property="receive_price", type="decimal", example="1"),
     *       @OA\Property(property="deliver_amount_currency_rate", type="double", example="1"),
     *       @OA\Property(property="receive_amount_currency_rate", type="double", example="1"),
     *       @OA\Property(property="amount_currency", type="Integer", example="1"),
     *       @OA\Property(property="price_currency", type="Integer", example="1"),
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
     *    description="Returns when Task has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="sequence", type="Integer", example="1"),
     *       @OA\Property(property="overall_sequence", type="Integer", example="1"),
     *       @OA\Property(property="deliver_amount", type="decimal", example="1"),
     *       @OA\Property(property="receive_amount", type="decimal", example="1"),
     *       @OA\Property(property="deliver_package", type="text", example="1"),
     *       @OA\Property(property="receive_package", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="fail_reason", type="text", example="1"),
     *       @OA\Property(property="collection_note", type="text", example="1"),
     *       @OA\Property(property="preferred_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_to_time", type="time", example="1"),
     *       @OA\Property(property="collection_date", type="datetime", example="1"),
     *       @OA\Property(property="require_signature", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="submitted", type="Integer", example="1"),
     *       @OA\Property(property="secured", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_id", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_type", type="text", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="require_picture", type="Integer", example="1"),
     *       @OA\Property(property="picture_id", type="Integer", example="1"),
     *       @OA\Property(property="signature_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="vehicle_id", type="Integer", example="1"),
     *       @OA\Property(property="receive_price", type="decimal", example="1"),
     *       @OA\Property(property="deliver_amount_currency_rate", type="double", example="1"),
     *       @OA\Property(property="receive_amount_currency_rate", type="double", example="1"),
     *       @OA\Property(property="amount_currency", type="Integer", example="1"),
     *       @OA\Property(property="price_currency", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $task = Task::create($request->all());
        return response()->json($task, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/task/{id}",
     * summary="Edit one Task by id",
     * description="update One Task by id",
     * operationId="postOneTasks",
     * tags={"task"},
     * @OA\Parameter(
     *    description="ID of task",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Task fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="sequence", type="Integer", example="1"),
     *       @OA\Property(property="overall_sequence", type="Integer", example="1"),
     *       @OA\Property(property="deliver_amount", type="decimal", example="1"),
     *       @OA\Property(property="receive_amount", type="decimal", example="1"),
     *       @OA\Property(property="deliver_package", type="text", example="1"),
     *       @OA\Property(property="receive_package", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="fail_reason", type="text", example="1"),
     *       @OA\Property(property="collection_note", type="text", example="1"),
     *       @OA\Property(property="preferred_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_to_time", type="time", example="1"),
     *       @OA\Property(property="collection_date", type="datetime", example="1"),
     *       @OA\Property(property="require_signature", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="submitted", type="Integer", example="1"),
     *       @OA\Property(property="secured", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_id", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_type", type="text", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="require_picture", type="Integer", example="1"),
     *       @OA\Property(property="picture_id", type="Integer", example="1"),
     *       @OA\Property(property="signature_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="vehicle_id", type="Integer", example="1"),
     *       @OA\Property(property="receive_price", type="decimal", example="1"),
     *       @OA\Property(property="deliver_amount_currency_rate", type="double", example="1"),
     *       @OA\Property(property="receive_amount_currency_rate", type="double", example="1"),
     *       @OA\Property(property="amount_currency", type="Integer", example="1"),
     *       @OA\Property(property="price_currency", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Task has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="sequence", type="Integer", example="1"),
     *       @OA\Property(property="overall_sequence", type="Integer", example="1"),
     *       @OA\Property(property="deliver_amount", type="decimal", example="1"),
     *       @OA\Property(property="receive_amount", type="decimal", example="1"),
     *       @OA\Property(property="deliver_package", type="text", example="1"),
     *       @OA\Property(property="receive_package", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="fail_reason", type="text", example="1"),
     *       @OA\Property(property="collection_note", type="text", example="1"),
     *       @OA\Property(property="preferred_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_to_time", type="time", example="1"),
     *       @OA\Property(property="collection_date", type="datetime", example="1"),
     *       @OA\Property(property="require_signature", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="submitted", type="Integer", example="1"),
     *       @OA\Property(property="secured", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_id", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_type", type="text", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="require_picture", type="Integer", example="1"),
     *       @OA\Property(property="picture_id", type="Integer", example="1"),
     *       @OA\Property(property="signature_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="vehicle_id", type="Integer", example="1"),
     *       @OA\Property(property="receive_price", type="decimal", example="1"),
     *       @OA\Property(property="deliver_amount_currency_rate", type="double", example="1"),
     *       @OA\Property(property="receive_amount_currency_rate", type="double", example="1"),
     *       @OA\Property(property="amount_currency", type="Integer", example="1"),
     *       @OA\Property(property="price_currency", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());

        return response()->json($task, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/task/{id}",
     * summary="delete Task by id",
     * description="delete one Task by id",
     * operationId="deleteOneTasks",
     * tags={"task"},
     * @OA\Parameter(
     *    description="ID of task",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when task id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Tasks are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="sequence", type="Integer", example="1"),
     *       @OA\Property(property="overall_sequence", type="Integer", example="1"),
     *       @OA\Property(property="deliver_amount", type="decimal", example="1"),
     *       @OA\Property(property="receive_amount", type="decimal", example="1"),
     *       @OA\Property(property="deliver_package", type="text", example="1"),
     *       @OA\Property(property="receive_package", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="fail_reason", type="text", example="1"),
     *       @OA\Property(property="collection_note", type="text", example="1"),
     *       @OA\Property(property="preferred_date", type="datetime", example="1"),
     *       @OA\Property(property="preferred_from_time", type="time", example="1"),
     *       @OA\Property(property="preferred_to_time", type="time", example="1"),
     *       @OA\Property(property="collection_date", type="datetime", example="1"),
     *       @OA\Property(property="require_signature", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="submitted", type="Integer", example="1"),
     *       @OA\Property(property="secured", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_id", type="Integer", example="1"),
     *       @OA\Property(property="receiverable_type", type="text", example="1"),
     *       @OA\Property(property="order_id", type="Integer", example="1"),
     *       @OA\Property(property="location_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="customer_id", type="Integer", example="1"),
     *       @OA\Property(property="store_id", type="Integer", example="1"),
     *       @OA\Property(property="require_picture", type="Integer", example="1"),
     *       @OA\Property(property="picture_id", type="Integer", example="1"),
     *       @OA\Property(property="signature_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="piggy_bank_id", type="Integer", example="1"),
     *       @OA\Property(property="vehicle_id", type="Integer", example="1"),
     *       @OA\Property(property="receive_price", type="decimal", example="1"),
     *       @OA\Property(property="deliver_amount_currency_rate", type="double", example="1"),
     *       @OA\Property(property="receive_amount_currency_rate", type="double", example="1"),
     *       @OA\Property(property="amount_currency", type="Integer", example="1"),
     *       @OA\Property(property="price_currency", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Task $task)
    {
        $task->delete();

        return response()->json($task, 200);
    }
}