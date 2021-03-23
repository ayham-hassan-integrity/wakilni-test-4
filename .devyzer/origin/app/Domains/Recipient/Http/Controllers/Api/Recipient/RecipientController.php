<?php

namespace App\Domains\Recipient\Http\Controllers\Api\Recipient;

use App\Http\Controllers\Controller;
use App\Domains\Recipient\Models\Recipient;
use Illuminate\Http\Request;

/**
 * Class RecipientController.
 */
class RecipientController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/recipient",
     * summary="Get All Recipients",
     * description="Show All Recipients",
     * operationId="getAllRecipients",
     * tags={"Recipient"},
     * @OA\Response(
     *    response=200,
     *    description="Returns when Recipient are found",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="first_name", type="text", example="1"),
     *       @OA\Property(property="last_name", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="date_of_birth", type="date", example="1"),
     *       @OA\Property(property="gender", type="Integer", example="1"),
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="allow_driver_contact", type="Integer", example="1"),
     *       @OA\Property(property="viewer_id", type="Integer", example="1"),
     *       @OA\Property(property="contact_id", type="Integer", example="1"),
     *       @OA\Property(property="default_address_id", type="Integer", example="1"),
     *       @OA\Property(property="secondary_phone_number", type="text", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
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
        return Recipient::all();
    }



    /**
     * @OA\Get(
     * path="/api/recipient/{id}",
     * summary="Get Recipient by id",
     * description="Show one Recipient by id",
     * operationId="getOneRecipients",
     * tags={"recipient"},
     * @OA\Parameter(
     *    description="ID of recipient",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when recipient id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Recipient is found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="first_name", type="text", example="1"),
     *       @OA\Property(property="last_name", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="date_of_birth", type="date", example="1"),
     *       @OA\Property(property="gender", type="Integer", example="1"),
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="allow_driver_contact", type="Integer", example="1"),
     *       @OA\Property(property="viewer_id", type="Integer", example="1"),
     *       @OA\Property(property="contact_id", type="Integer", example="1"),
     *       @OA\Property(property="default_address_id", type="Integer", example="1"),
     *       @OA\Property(property="secondary_phone_number", type="text", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="null"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function show(Recipient $recipient)
    {
        return $recipient;
    }

    /**
     * @OA\Post (
     * path="/api/recipient",
     * summary="Create New Recipient",
     * description="Create One Recipient",
     * operationId="postOneRecipients",
     * tags={"recipient"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Recipient fields",
     *    @OA\JsonContent(
     *       required={"name"},
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="first_name", type="text", example="1"),
     *       @OA\Property(property="last_name", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="date_of_birth", type="date", example="1"),
     *       @OA\Property(property="gender", type="Integer", example="1"),
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="allow_driver_contact", type="Integer", example="1"),
     *       @OA\Property(property="viewer_id", type="Integer", example="1"),
     *       @OA\Property(property="contact_id", type="Integer", example="1"),
     *       @OA\Property(property="default_address_id", type="Integer", example="1"),
     *       @OA\Property(property="secondary_phone_number", type="text", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
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
     *    description="Returns when Recipient has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="first_name", type="text", example="1"),
     *       @OA\Property(property="last_name", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="date_of_birth", type="date", example="1"),
     *       @OA\Property(property="gender", type="Integer", example="1"),
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="allow_driver_contact", type="Integer", example="1"),
     *       @OA\Property(property="viewer_id", type="Integer", example="1"),
     *       @OA\Property(property="contact_id", type="Integer", example="1"),
     *       @OA\Property(property="default_address_id", type="Integer", example="1"),
     *       @OA\Property(property="secondary_phone_number", type="text", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function store(Request $request)
    {
        $recipient = Recipient::create($request->all());
        return response()->json($recipient, 201);
    }

    /**
     * @OA\Put  (
     * path="/api/recipient/{id}",
     * summary="Edit one Recipient by id",
     * description="update One Recipient by id",
     * operationId="postOneRecipients",
     * tags={"recipient"},
     * @OA\Parameter(
     *    description="ID of recipient",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Recipient fields",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="first_name", type="text", example="1"),
     *       @OA\Property(property="last_name", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="date_of_birth", type="date", example="1"),
     *       @OA\Property(property="gender", type="Integer", example="1"),
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="allow_driver_contact", type="Integer", example="1"),
     *       @OA\Property(property="viewer_id", type="Integer", example="1"),
     *       @OA\Property(property="contact_id", type="Integer", example="1"),
     *       @OA\Property(property="default_address_id", type="Integer", example="1"),
     *       @OA\Property(property="secondary_phone_number", type="text", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Recipient has been created",
     *    @OA\JsonContent(
     *     @OA\Items(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="first_name", type="text", example="1"),
     *       @OA\Property(property="last_name", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="date_of_birth", type="date", example="1"),
     *       @OA\Property(property="gender", type="Integer", example="1"),
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="allow_driver_contact", type="Integer", example="1"),
     *       @OA\Property(property="viewer_id", type="Integer", example="1"),
     *       @OA\Property(property="contact_id", type="Integer", example="1"),
     *       @OA\Property(property="default_address_id", type="Integer", example="1"),
     *       @OA\Property(property="secondary_phone_number", type="text", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:04:27.000000Z"),
     *    )
     * )
     * )
     * )
     */

    public function update(Request $request, Recipient $recipient)
    {
        $recipient->update($request->all());

        return response()->json($recipient, 200);
    }

    /**
     * @OA\Delete (
     * path="/api/recipient/{id}",
     * summary="delete Recipient by id",
     * description="delete one Recipient by id",
     * operationId="deleteOneRecipients",
     * tags={"recipient"},
     * @OA\Parameter(
     *    description="ID of recipient",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Returns when recipient id is not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="Resource not found"),
     *    )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Returns when Recipients are found",
     *    @OA\JsonContent(
     *       @OA\Property(property="id", type="Integer", example="1"),
     *       @OA\Property(property="first_name", type="text", example="1"),
     *       @OA\Property(property="last_name", type="text", example="1"),
     *       @OA\Property(property="phone_number", type="text", example="1"),
     *       @OA\Property(property="date_of_birth", type="date", example="1"),
     *       @OA\Property(property="gender", type="Integer", example="1"),
     *       @OA\Property(property="email", type="text", example="1"),
     *       @OA\Property(property="note", type="text", example="1"),
     *       @OA\Property(property="allow_driver_contact", type="Integer", example="1"),
     *       @OA\Property(property="viewer_id", type="Integer", example="1"),
     *       @OA\Property(property="contact_id", type="Integer", example="1"),
     *       @OA\Property(property="default_address_id", type="Integer", example="1"),
     *       @OA\Property(property="secondary_phone_number", type="text", example="1"),
     *       @OA\Property(property="app_token_id", type="Integer", example="1"),
     *       @OA\Property(property="app_ref_id", type="Integer", example="1"),
     *       @OA\Property(property="deleted_at", type="string", example="2021-03-10T15:47:13.000000Z"),
     *       @OA\Property(property="created_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *       @OA\Property(property="updated_at", type="string", example="2021-03-10T09:03:27.000000Z"),
     *    )
     * )
     * )
     * )
     */
    public function delete(Recipient $recipient)
    {
        $recipient->delete();

        return response()->json($recipient, 200);
    }
}