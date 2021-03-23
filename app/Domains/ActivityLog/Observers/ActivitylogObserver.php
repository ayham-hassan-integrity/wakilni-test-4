<?php

namespace App\Domains\ActivityLog\Observers;

use App\Domains\ActivityLog\Models\Activitylog;

/**
 * Class ActivitylogObserver.
 */
class ActivitylogObserver
{
    /**
     * @param  Activitylog  $activitylog
     */
    public function created(Activitylog $activitylog): void
    {

    }

    /**
     * @param  Activitylog  $activitylog
     */
    public function updated(Activitylog $activitylog): void
    {

    }

}
