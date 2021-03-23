<?php

namespace App\Domains\FailedJob\Observers;

use App\Domains\FailedJob\Models\Failedjob;

/**
 * Class FailedjobObserver.
 */
class FailedjobObserver
{
    /**
     * @param  Failedjob  $failedjob
     */
    public function created(Failedjob $failedjob): void
    {

    }

    /**
     * @param  Failedjob  $failedjob
     */
    public function updated(Failedjob $failedjob): void
    {

    }

}
