<?php

namespace App\Domains\TimeSheet\Observers;

use App\Domains\TimeSheet\Models\Timesheet;

/**
 * Class TimesheetObserver.
 */
class TimesheetObserver
{
    /**
     * @param  Timesheet  $timesheet
     */
    public function created(Timesheet $timesheet): void
    {

    }

    /**
     * @param  Timesheet  $timesheet
     */
    public function updated(Timesheet $timesheet): void
    {

    }

}
