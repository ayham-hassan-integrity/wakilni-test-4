<?php

namespace App\Domains\CustomerCurrency\Observers;

use App\Domains\CustomerCurrency\Models\Customercurrency;

/**
 * Class CustomercurrencyObserver.
 */
class CustomercurrencyObserver
{
    /**
     * @param  Customercurrency  $customercurrency
     */
    public function created(Customercurrency $customercurrency): void
    {

    }

    /**
     * @param  Customercurrency  $customercurrency
     */
    public function updated(Customercurrency $customercurrency): void
    {

    }

}
