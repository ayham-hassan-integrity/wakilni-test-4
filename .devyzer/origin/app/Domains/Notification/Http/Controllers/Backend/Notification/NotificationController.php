<?php

namespace App\Domains\Notification\Http\Controllers\Backend\Notification;

use App\Http\Controllers\Controller;
use App\Domains\Notification\Models\Notification;
use App\Domains\Notification\Services\NotificationService;
use App\Domains\Notification\Http\Requests\Backend\Notification\DeleteNotificationRequest;
use App\Domains\Notification\Http\Requests\Backend\Notification\EditNotificationRequest;
use App\Domains\Notification\Http\Requests\Backend\Notification\StoreNotificationRequest;
use App\Domains\Notification\Http\Requests\Backend\Notification\UpdateNotificationRequest;

/**
 * Class NotificationController.
 */
class NotificationController extends Controller
{
    /**
     * @var NotificationService
     */
    protected $notificationService;

    /**
     * NotificationController constructor.
     *
     * @param NotificationService $notificationService
     */
    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.notification.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.notification.create');
    }

    /**
     * @param StoreNotificationRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreNotificationRequest $request)
    {
        $notification = $this->notificationService->store($request->validated());

        return redirect()->route('admin.notification.show', $notification)->withFlashSuccess(__('The  Notifications was successfully created.'));
    }

    /**
     * @param Notification $notification
     *
     * @return mixed
     */
    public function show(Notification $notification)
    {
        return view('backend.notification.show')
            ->withNotification($notification);
    }

    /**
     * @param EditNotificationRequest $request
     * @param Notification $notification
     *
     * @return mixed
     */
    public function edit(EditNotificationRequest $request, Notification $notification)
    {
        return view('backend.notification.edit')
            ->withNotification($notification);
    }

    /**
     * @param UpdateNotificationRequest $request
     * @param Notification $notification
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateNotificationRequest $request, Notification $notification)
    {
        $this->notificationService->update($notification, $request->validated());

        return redirect()->route('admin.notification.show', $notification)->withFlashSuccess(__('The  Notifications was successfully updated.'));
    }

    /**
     * @param DeleteNotificationRequest $request
     * @param Notification $notification
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteNotificationRequest $request, Notification $notification)
    {
        $this->notificationService->delete($notification);

        return redirect()->route('admin.$notification.deleted')->withFlashSuccess(__('The  Notifications was successfully deleted.'));
    }
}