<?php

namespace App\Domains\Message\Http\Controllers\Backend\Message;

use App\Http\Controllers\Controller;
use App\Domains\Message\Models\Message;
use App\Domains\Message\Services\MessageService;

/**
 * Class DeletedMessageController.
 */
class DeletedMessageController extends Controller
{
    /**
     * @var MessageService
     */
    protected $messageService;

    /**
     * DeletedMessageController constructor.
     *
     * @param  MessageService  $messageService
     */
    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.message.deleted');
    }

    /**
     * @param  Message  $deletedMessage
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Message $deletedMessage)
    {
        $this->messageService->restore($deletedMessage);

        return redirect()->route('admin.message.index')->withFlashSuccess(__('The  Messages was successfully restored.'));
    }

    /**
     * @param  Message  $deletedMessage
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Message $deletedMessage)
    {
        $this->messageService->destroy($deletedMessage);

        return redirect()->route('admin.message.deleted')->withFlashSuccess(__('The  Messages was permanently deleted.'));
    }
}