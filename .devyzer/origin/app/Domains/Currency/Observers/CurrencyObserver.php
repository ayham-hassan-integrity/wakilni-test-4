<?php

namespace App\Domains\Currency\Observers;

use App\Domains\Currency\Models\Currency;

/**
 * Class CurrencyObserver.
 */
class CurrencyObserver
{
    /**
     * @param  Currency  $currency
     */
    public function created(Currency $currency): void
    {

    }

    /**
     * @param  Currency  $currency
     */
    public function updated(Currency $currency): void
    {

    }

}
