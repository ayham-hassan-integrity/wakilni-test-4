<?php

namespace App\Domains\Barcode\Observers;

use App\Domains\Barcode\Models\Barcode;

/**
 * Class BarcodeObserver.
 */
class BarcodeObserver
{
    /**
     * @param  Barcode  $barcode
     */
    public function created(Barcode $barcode): void
    {

    }

    /**
     * @param  Barcode  $barcode
     */
    public function updated(Barcode $barcode): void
    {

    }

}
