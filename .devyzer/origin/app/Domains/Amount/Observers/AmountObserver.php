<?php

namespace App\Domains\Amount\Observers;

use App\Domains\Amount\Models\Amount;

/**
 * Class AmountObserver.
 */
class AmountObserver
{
    /**
     * @param  Amount  $amount
     */
    public function created(Amount $amount): void
    {

    }

    /**
     * @param  Amount  $amount
     */
    public function updated(Amount $amount): void
    {

    }

}
