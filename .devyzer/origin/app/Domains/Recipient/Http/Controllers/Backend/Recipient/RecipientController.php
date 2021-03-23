<?php

namespace App\Domains\Recipient\Http\Controllers\Backend\Recipient;

use App\Http\Controllers\Controller;
use App\Domains\Recipient\Models\Recipient;
use App\Domains\Recipient\Services\RecipientService;
use App\Domains\Recipient\Http\Requests\Backend\Recipient\DeleteRecipientRequest;
use App\Domains\Recipient\Http\Requests\Backend\Recipient\EditRecipientRequest;
use App\Domains\Recipient\Http\Requests\Backend\Recipient\StoreRecipientRequest;
use App\Domains\Recipient\Http\Requests\Backend\Recipient\UpdateRecipientRequest;

/**
 * Class RecipientController.
 */
class RecipientController extends Controller
{
    /**
     * @var RecipientService
     */
    protected $recipientService;

    /**
     * RecipientController constructor.
     *
     * @param RecipientService $recipientService
     */
    public function __construct(RecipientService $recipientService)
    {
        $this->recipientService = $recipientService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.recipient.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.recipient.create');
    }

    /**
     * @param StoreRecipientRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreRecipientRequest $request)
    {
        $recipient = $this->recipientService->store($request->validated());

        return redirect()->route('admin.recipient.show', $recipient)->withFlashSuccess(__('The  Recipients was successfully created.'));
    }

    /**
     * @param Recipient $recipient
     *
     * @return mixed
     */
    public function show(Recipient $recipient)
    {
        return view('backend.recipient.show')
            ->withRecipient($recipient);
    }

    /**
     * @param EditRecipientRequest $request
     * @param Recipient $recipient
     *
     * @return mixed
     */
    public function edit(EditRecipientRequest $request, Recipient $recipient)
    {
        return view('backend.recipient.edit')
            ->withRecipient($recipient);
    }

    /**
     * @param UpdateRecipientRequest $request
     * @param Recipient $recipient
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateRecipientRequest $request, Recipient $recipient)
    {
        $this->recipientService->update($recipient, $request->validated());

        return redirect()->route('admin.recipient.show', $recipient)->withFlashSuccess(__('The  Recipients was successfully updated.'));
    }

    /**
     * @param DeleteRecipientRequest $request
     * @param Recipient $recipient
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteRecipientRequest $request, Recipient $recipient)
    {
        $this->recipientService->delete($recipient);

        return redirect()->route('admin.$recipient.deleted')->withFlashSuccess(__('The  Recipients was successfully deleted.'));
    }
}