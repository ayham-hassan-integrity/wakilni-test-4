<?php

namespace App\Domains\Notification\Http\Controllers\Backend\Notification;

use App\Http\Controllers\Controller;
use App\Domains\Notification\Models\Notification;
use App\Domains\Notification\Services\NotificationService;

/**
 * Class DeletedNotificationController.
 */
class DeletedNotificationController extends Controller
{
    /**
     * @var NotificationService
     */
    protected $notificationService;

    /**
     * DeletedNotificationController constructor.
     *
     * @param  NotificationService  $notificationService
     */
    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.notification.deleted');
    }

    /**
     * @param  Notification  $deletedNotification
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Notification $deletedNotification)
    {
        $this->notificationService->restore($deletedNotification);

        return redirect()->route('admin.notification.index')->withFlashSuccess(__('The  Notifications was successfully restored.'));
    }

    /**
     * @param  Notification  $deletedNotification
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Notification $deletedNotification)
    {
        $this->notificationService->destroy($deletedNotification);

        return redirect()->route('admin.notification.deleted')->withFlashSuccess(__('The  Notifications was permanently deleted.'));
    }
}