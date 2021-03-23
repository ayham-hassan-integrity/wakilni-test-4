<?php

namespace App\Domains\PasswordReset\Observers;

use App\Domains\PasswordReset\Models\Passwordreset;

/**
 * Class PasswordresetObserver.
 */
class PasswordresetObserver
{
    /**
     * @param  Passwordreset  $passwordreset
     */
    public function created(Passwordreset $passwordreset): void
    {

    }

    /**
     * @param  Passwordreset  $passwordreset
     */
    public function updated(Passwordreset $passwordreset): void
    {

    }

}
