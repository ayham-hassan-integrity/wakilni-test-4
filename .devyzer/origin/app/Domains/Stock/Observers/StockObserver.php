<?php

namespace App\Domains\Stock\Observers;

use App\Domains\Stock\Models\Stock;

/**
 * Class StockObserver.
 */
class StockObserver
{
    /**
     * @param  Stock  $stock
     */
    public function created(Stock $stock): void
    {

    }

    /**
     * @param  Stock  $stock
     */
    public function updated(Stock $stock): void
    {

    }

}
