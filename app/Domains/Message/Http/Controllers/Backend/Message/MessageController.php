<?php

namespace App\Domains\Message\Http\Controllers\Backend\Message;

use App\Http\Controllers\Controller;
use App\Domains\Message\Models\Message;
use App\Domains\Message\Services\MessageService;
use App\Domains\Message\Http\Requests\Backend\Message\DeleteMessageRequest;
use App\Domains\Message\Http\Requests\Backend\Message\EditMessageRequest;
use App\Domains\Message\Http\Requests\Backend\Message\StoreMessageRequest;
use App\Domains\Message\Http\Requests\Backend\Message\UpdateMessageRequest;

/**
 * Class MessageController.
 */
class MessageController extends Controller
{
    /**
     * @var MessageService
     */
    protected $messageService;

    /**
     * MessageController constructor.
     *
     * @param MessageService $messageService
     */
    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.message.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.message.create');
    }

    /**
     * @param StoreMessageRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreMessageRequest $request)
    {
        $message = $this->messageService->store($request->validated());

        return redirect()->route('admin.message.show', $message)->withFlashSuccess(__('The  Messages was successfully created.'));
    }

    /**
     * @param Message $message
     *
     * @return mixed
     */
    public function show(Message $message)
    {
        return view('backend.message.show')
            ->withMessage($message);
    }

    /**
     * @param EditMessageRequest $request
     * @param Message $message
     *
     * @return mixed
     */
    public function edit(EditMessageRequest $request, Message $message)
    {
        return view('backend.message.edit')
            ->withMessage($message);
    }

    /**
     * @param UpdateMessageRequest $request
     * @param Message $message
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        $this->messageService->update($message, $request->validated());

        return redirect()->route('admin.message.show', $message)->withFlashSuccess(__('The  Messages was successfully updated.'));
    }

    /**
     * @param DeleteMessageRequest $request
     * @param Message $message
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteMessageRequest $request, Message $message)
    {
        $this->messageService->delete($message);

        return redirect()->route('admin.$message.deleted')->withFlashSuccess(__('The  Messages was successfully deleted.'));
    }
}