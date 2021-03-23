<?php

namespace App\Domains\Submission\Http\Controllers\Api\Submission;

use App\Http\Controllers\Controller;
use App\Domains\Submission\Models\Submission;
use Illuminate\Http\Request;

/**
 * Class SubmissionController.
 */
class SubmissionController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/submission",
     * summary="Get All Submissions",
     * description="Show All Submissions",
     * operationId="getAllSubmissions",
     * tags={"Submission"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Submission are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="corrected_amount", type="decimal", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_submission_id", type="Integer", example="1"),
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
        return Submission::all();
    }



    /**
     * @OA\Get(
     * path="/api/submission/{id}",
     * summary="Get Submission by id",
     * description="Show one Submission by id",
     * operationId="getOneSubmissions",
     * tags={"submission"},
     * @OA\Parameter(
     *    description="ID of submission",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when submission id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Submission is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="corrected_amount", type="decimal", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Submission $submission)
    {
        return $submission;
    }

    /**
     * @OA\Post (
     * path="/api/submission",
     * summary="Create New Submission",
     * description="Create One Submission",
     * operationId="postOneSubmissions",
     * tags={"submission"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Submission fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="corrected_amount", type="decimal", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_submission_id", type="Integer", example="1"),
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
     *    description="Returns when Submission has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="corrected_amount", type="decimal", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_submission_id", type="Integer", example="1"),
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
        $submission = Submission::create($request->all());
        return response()->json($submission, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/submission/{id}",
     * summary="Edit one Submission by id",
     * description="update One Submission by id",
     * operationId="postOneSubmissions",
     * tags={"submission"},
     * @OA\Parameter(
     *    description="ID of submission",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Submission fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="corrected_amount", type="decimal", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Submission has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="corrected_amount", type="decimal", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Submission $submission)
    {
        $submission->update($request->all());

        return response()->json($submission, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/submission/{id}",
     * summary="delete Submission by id",
     * description="delete one Submission by id",
     * operationId="deleteOneSubmissions",
     * tags={"submission"},
     * @OA\Parameter(
     *    description="ID of submission",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when submission id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Submissions are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="amount", type="decimal", example="1"),
     *       @OA\Property(property="corrected_amount", type="decimal", example="1"),
     *       @OA\Property(property="type_id", type="Integer", example="1"),
     *       @OA\Property(property="driver_submission_id", type="Integer", example="1"),
     *       @OA\Property(property="currency_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Submission $submission)
    {
        $submission->delete();

        return response()->json($submission, 200);
    }
}