<?php

namespace App\Domains\Order\Observers;

use App\Domains\Order\Models\Order;

/**
 * Class OrderObserver.
 */
class OrderObserver
{
    /**
     * @param  Order  $order
     */
    public function created(Order $order): void
    {

    }

    /**
     * @param  Order  $order
     */
    public function updated(Order $order): void
    {

    }

}
