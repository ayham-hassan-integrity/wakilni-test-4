<?php

namespace App\Domains\Permission\Observers;

use App\Domains\Permission\Models\Permission;

/**
 * Class PermissionObserver.
 */
class PermissionObserver
{
    /**
     * @param  Permission  $permission
     */
    public function created(Permission $permission): void
    {

    }

    /**
     * @param  Permission  $permission
     */
    public function updated(Permission $permission): void
    {

    }

}
