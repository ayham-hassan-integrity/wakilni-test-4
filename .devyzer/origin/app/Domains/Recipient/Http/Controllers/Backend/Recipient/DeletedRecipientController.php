<?php

namespace App\Domains\Recipient\Http\Controllers\Backend\Recipient;

use App\Http\Controllers\Controller;
use App\Domains\Recipient\Models\Recipient;
use App\Domains\Recipient\Services\RecipientService;

/**
 * Class DeletedRecipientController.
 */
class DeletedRecipientController extends Controller
{
    /**
     * @var RecipientService
     */
    protected $recipientService;

    /**
     * DeletedRecipientController constructor.
     *
     * @param  RecipientService  $recipientService
     */
    public function __construct(RecipientService $recipientService)
    {
        $this->recipientService = $recipientService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.recipient.deleted');
    }

    /**
     * @param  Recipient  $deletedRecipient
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Recipient $deletedRecipient)
    {
        $this->recipientService->restore($deletedRecipient);

        return redirect()->route('admin.recipient.index')->withFlashSuccess(__('The  Recipients was successfully restored.'));
    }

    /**
     * @param  Recipient  $deletedRecipient
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Recipient $deletedRecipient)
    {
        $this->recipientService->destroy($deletedRecipient);

        return redirect()->route('admin.recipient.deleted')->withFlashSuccess(__('The  Recipients was permanently deleted.'));
    }
}