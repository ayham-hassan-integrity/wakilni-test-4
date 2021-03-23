<?php

namespace App\Domains\TimeSheet\Http\Controllers\Api\Timesheet;

use App\Http\Controllers\Controller;
use App\Domains\TimeSheet\Models\Timesheet;
use Illuminate\Http\Request;

/**
 * Class TimesheetController.
 */
class TimesheetController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/timesheet",
     * summary="Get All Timesheets",
     * description="Show All Timesheets",
     * operationId="getAllTimesheets",
     * tags={"Timesheet"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Timesheet are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="from", type="datetime", example="1"),
     *       @OA\Property(property="to", type="datetime", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
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
        return Timesheet::all();
    }



    /**
     * @OA\Get(
     * path="/api/timesheet/{id}",
     * summary="Get Timesheet by id",
     * description="Show one Timesheet by id",
     * operationId="getOneTimesheets",
     * tags={"timesheet"},
     * @OA\Parameter(
     *    description="ID of timesheet",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when timesheet id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Timesheet is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="from", type="datetime", example="1"),
     *       @OA\Property(property="to", type="datetime", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Timesheet $timesheet)
    {
        return $timesheet;
    }

    /**
     * @OA\Post (
     * path="/api/timesheet",
     * summary="Create New Timesheet",
     * description="Create One Timesheet",
     * operationId="postOneTimesheets",
     * tags={"timesheet"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Timesheet fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="from", type="datetime", example="1"),
     *       @OA\Property(property="to", type="datetime", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
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
     *    description="Returns when Timesheet has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="from", type="datetime", example="1"),
     *       @OA\Property(property="to", type="datetime", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $timesheet = Timesheet::create($request->all());
        return response()->json($timesheet, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/timesheet/{id}",
     * summary="Edit one Timesheet by id",
     * description="update One Timesheet by id",
     * operationId="postOneTimesheets",
     * tags={"timesheet"},
     * @OA\Parameter(
     *    description="ID of timesheet",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Timesheet fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="from", type="datetime", example="1"),
     *       @OA\Property(property="to", type="datetime", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Timesheet has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="from", type="datetime", example="1"),
     *       @OA\Property(property="to", type="datetime", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Timesheet $timesheet)
    {
        $timesheet->update($request->all());

        return response()->json($timesheet, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/timesheet/{id}",
     * summary="delete Timesheet by id",
     * description="delete one Timesheet by id",
     * operationId="deleteOneTimesheets",
     * tags={"timesheet"},
     * @OA\Parameter(
     *    description="ID of timesheet",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when timesheet id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Timesheets are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="from", type="datetime", example="1"),
     *       @OA\Property(property="to", type="datetime", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="user_id", type="Integer", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Timesheet $timesheet)
    {
        $timesheet->delete();

        return response()->json($timesheet, 200);
    }
}