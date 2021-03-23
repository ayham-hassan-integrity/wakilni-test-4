<?php

namespace App\Domains\AppToken\Observers;

use App\Domains\AppToken\Models\Apptoken;

/**
 * Class ApptokenObserver.
 */
class ApptokenObserver
{
    /**
     * @param  Apptoken  $apptoken
     */
    public function created(Apptoken $apptoken): void
    {

    }

    /**
     * @param  Apptoken  $apptoken
     */
    public function updated(Apptoken $apptoken): void
    {

    }

}
