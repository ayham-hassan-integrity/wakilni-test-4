<?php

namespace App\Domains\TimeSheet\Http\Controllers\Backend\Timesheet;

use App\Http\Controllers\Controller;
use App\Domains\TimeSheet\Models\Timesheet;
use App\Domains\TimeSheet\Services\TimesheetService;
use App\Domains\TimeSheet\Http\Requests\Backend\Timesheet\DeleteTimesheetRequest;
use App\Domains\TimeSheet\Http\Requests\Backend\Timesheet\EditTimesheetRequest;
use App\Domains\TimeSheet\Http\Requests\Backend\Timesheet\StoreTimesheetRequest;
use App\Domains\TimeSheet\Http\Requests\Backend\Timesheet\UpdateTimesheetRequest;

/**
 * Class TimesheetController.
 */
class TimesheetController extends Controller
{
    /**
     * @var TimesheetService
     */
    protected $timesheetService;

    /**
     * TimesheetController constructor.
     *
     * @param TimesheetService $timesheetService
     */
    public function __construct(TimesheetService $timesheetService)
    {
        $this->timesheetService = $timesheetService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.time-sheet.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.time-sheet.create');
    }

    /**
     * @param StoreTimesheetRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreTimesheetRequest $request)
    {
        $timesheet = $this->timesheetService->store($request->validated());

        return redirect()->route('admin.timesheet.show', $timesheet)->withFlashSuccess(__('The  Timesheets was successfully created.'));
    }

    /**
     * @param Timesheet $timesheet
     *
     * @return mixed
     */
    public function show(Timesheet $timesheet)
    {
        return view('backend.time-sheet.show')
            ->withTimesheet($timesheet);
    }

    /**
     * @param EditTimesheetRequest $request
     * @param Timesheet $timesheet
     *
     * @return mixed
     */
    public function edit(EditTimesheetRequest $request, Timesheet $timesheet)
    {
        return view('backend.time-sheet.edit')
            ->withTimesheet($timesheet);
    }

    /**
     * @param UpdateTimesheetRequest $request
     * @param Timesheet $timesheet
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateTimesheetRequest $request, Timesheet $timesheet)
    {
        $this->timesheetService->update($timesheet, $request->validated());

        return redirect()->route('admin.timesheet.show', $timesheet)->withFlashSuccess(__('The  Timesheets was successfully updated.'));
    }

    /**
     * @param DeleteTimesheetRequest $request
     * @param Timesheet $timesheet
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteTimesheetRequest $request, Timesheet $timesheet)
    {
        $this->timesheetService->delete($timesheet);

        return redirect()->route('admin.$timesheet.deleted')->withFlashSuccess(__('The  Timesheets was successfully deleted.'));
    }
}