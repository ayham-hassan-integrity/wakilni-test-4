<?php

namespace App\Domains\Notification\Services;

use App\Domains\Notification\Models\Notification;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class NotificationService.
 */
class NotificationService extends BaseService
{
    /**
     * NotificationService constructor.
     *
     * @param Notification $notification
     */
    public function __construct(Notification $notification)
    {
        $this->model = $notification;
    }

    /**
     * @param array $data
     *
     * @return Notification
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Notification
    {
        DB::beginTransaction();

        try {
            $notification = $this->model::create([
                'type_id' => $data['type_id'],
                'notifiable_id' => $data['notifiable_id'],
                'notifiable_type' => $data['notifiable_type'],
                'data' => $data['data'],
                'read_at' => $data['read_at'],
                'objectable_id' => $data['objectable_id'],
                'objectable_type' => $data['objectable_type'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this notification. Please try again.'));
        }

        DB::commit();

        return $notification;
    }

    /**
     * @param Notification $notification
     * @param array $data
     *
     * @return Notification
     * @throws \Throwable
     */
    public function update(Notification $notification, array $data = []): Notification
    {
        DB::beginTransaction();

        try {
            $notification->update([
                'type_id' => $data['type_id'],
                'notifiable_id' => $data['notifiable_id'],
                'notifiable_type' => $data['notifiable_type'],
                'data' => $data['data'],
                'read_at' => $data['read_at'],
                'objectable_id' => $data['objectable_id'],
                'objectable_type' => $data['objectable_type'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this notification. Please try again.'));
        }

        DB::commit();

        return $notification;
    }

    /**
     * @param Notification $notification
     *
     * @return Notification
     * @throws GeneralException
     */
    public function delete(Notification $notification): Notification
    {
        if ($this->deleteById($notification->id)) {
            return $notification;
        }

        throw new GeneralException('There was a problem deleting this notification. Please try again.');
    }

    /**
     * @param Notification $notification
     *
     * @return Notification
     * @throws GeneralException
     */
    public function restore(Notification $notification): Notification
    {
        if ($notification->restore()) {
            return $notification;
        }

        throw new GeneralException(__('There was a problem restoring this  Notifications. Please try again.'));
    }

    /**
     * @param Notification $notification
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Notification $notification): bool
    {
        if ($notification->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Notifications. Please try again.'));
    }
}