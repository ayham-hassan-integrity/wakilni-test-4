<?php

namespace App\Domains\TimeSheet\Http\Controllers\Backend\Timesheet;

use App\Http\Controllers\Controller;
use App\Domains\TimeSheet\Models\Timesheet;
use App\Domains\TimeSheet\Services\TimesheetService;

/**
 * Class DeletedTimesheetController.
 */
class DeletedTimesheetController extends Controller
{
    /**
     * @var TimesheetService
     */
    protected $timesheetService;

    /**
     * DeletedTimesheetController constructor.
     *
     * @param  TimesheetService  $timesheetService
     */
    public function __construct(TimesheetService $timesheetService)
    {
        $this->timesheetService = $timesheetService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.time-sheet.deleted');
    }

    /**
     * @param  Timesheet  $deletedTimesheet
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Timesheet $deletedTimesheet)
    {
        $this->timesheetService->restore($deletedTimesheet);

        return redirect()->route('admin.timesheet.index')->withFlashSuccess(__('The  Timesheets was successfully restored.'));
    }

    /**
     * @param  Timesheet  $deletedTimesheet
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Timesheet $deletedTimesheet)
    {
        $this->timesheetService->destroy($deletedTimesheet);

        return redirect()->route('admin.timesheet.deleted')->withFlashSuccess(__('The  Timesheets was permanently deleted.'));
    }
}