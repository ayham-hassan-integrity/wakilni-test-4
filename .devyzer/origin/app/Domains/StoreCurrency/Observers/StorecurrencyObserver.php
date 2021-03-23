<?php

namespace App\Domains\StoreCurrency\Observers;

use App\Domains\StoreCurrency\Models\Storecurrency;

/**
 * Class StorecurrencyObserver.
 */
class StorecurrencyObserver
{
    /**
     * @param  Storecurrency  $storecurrency
     */
    public function created(Storecurrency $storecurrency): void
    {

    }

    /**
     * @param  Storecurrency  $storecurrency
     */
    public function updated(Storecurrency $storecurrency): void
    {

    }

}
