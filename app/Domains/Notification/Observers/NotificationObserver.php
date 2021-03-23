<?php

namespace App\Domains\Notification\Observers;

use App\Domains\Notification\Models\Notification;

/**
 * Class NotificationObserver.
 */
class NotificationObserver
{
    /**
     * @param  Notification  $notification
     */
    public function created(Notification $notification): void
    {

    }

    /**
     * @param  Notification  $notification
     */
    public function updated(Notification $notification): void
    {

    }

}
