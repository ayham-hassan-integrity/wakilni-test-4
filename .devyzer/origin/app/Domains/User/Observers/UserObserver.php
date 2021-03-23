<?php

namespace App\Domains\User\Observers;

use App\Domains\User\Models\User;

/**
 * Class UserObserver.
 */
class UserObserver
{
    /**
     * @param  User  $user
     */
    public function created(User $user): void
    {

    }

    /**
     * @param  User  $user
     */
    public function updated(User $user): void
    {

    }

}
