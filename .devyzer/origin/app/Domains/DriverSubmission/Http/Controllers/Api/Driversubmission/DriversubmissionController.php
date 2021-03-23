<?php

namespace App\Domains\DriverSubmission\Http\Controllers\Api\Driversubmission;

use App\Http\Controllers\Controller;
use App\Domains\DriverSubmission\Models\Driversubmission;
use Illuminate\Http\Request;

/**
 * Class DriversubmissionController.
 */
class DriversubmissionController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/driversubmission",
     * summary="Get All Driversubmissions",
     * description="Show All Driversubmissions",
     * operationId="getAllDriversubmissions",
     * tags={"Driversubmission"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Driversubmission are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="goal_amount", type="decimal", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="operator_note", type="text", example="1"),
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
        return Driversubmission::all();
    }



    /**
     * @OA\Get(
     * path="/api/driversubmission/{id}",
     * summary="Get Driversubmission by id",
     * description="Show one Driversubmission by id",
     * operationId="getOneDriversubmissions",
     * tags={"driversubmission"},
     * @OA\Parameter(
     *    description="ID of driversubmission",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when driversubmission id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Driversubmission is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="goal_amount", type="decimal", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="operator_note", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Driversubmission $driversubmission)
    {
        return $driversubmission;
    }

    /**
     * @OA\Post (
     * path="/api/driversubmission",
     * summary="Create New Driversubmission",
     * description="Create One Driversubmission",
     * operationId="postOneDriversubmissions",
     * tags={"driversubmission"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Driversubmission fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="goal_amount", type="decimal", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="operator_note", type="text", example="1"),
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
     *    description="Returns when Driversubmission has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="goal_amount", type="decimal", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="operator_note", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $driversubmission = Driversubmission::create($request->all());
        return response()->json($driversubmission, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/driversubmission/{id}",
     * summary="Edit one Driversubmission by id",
     * description="update One Driversubmission by id",
     * operationId="postOneDriversubmissions",
     * tags={"driversubmission"},
     * @OA\Parameter(
     *    description="ID of driversubmission",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Driversubmission fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="goal_amount", type="decimal", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="operator_note", type="text", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Driversubmission has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="goal_amount", type="decimal", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="operator_note", type="text", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Driversubmission $driversubmission)
    {
        $driversubmission->update($request->all());

        return response()->json($driversubmission, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/driversubmission/{id}",
     * summary="delete Driversubmission by id",
     * description="delete one Driversubmission by id",
     * operationId="deleteOneDriversubmissions",
     * tags={"driversubmission"},
     * @OA\Parameter(
     *    description="ID of driversubmission",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when driversubmission id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Driversubmissions are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="goal_amount", type="decimal", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="status", type="Integer", example="1"),
     *       @OA\Property(property="driver_id", type="Integer", example="1"),
     *       @OA\Property(property="operator_note", type="text", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Driversubmission $driversubmission)
    {
        $driversubmission->delete();

        return response()->json($driversubmission, 200);
    }
}