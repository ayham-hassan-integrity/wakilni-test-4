<?php

namespace App\Domains\Payment\Observers;

use App\Domains\Payment\Models\Payment;

/**
 * Class PaymentObserver.
 */
class PaymentObserver
{
    /**
     * @param  Payment  $payment
     */
    public function created(Payment $payment): void
    {

    }

    /**
     * @param  Payment  $payment
     */
    public function updated(Payment $payment): void
    {

    }

}
