<?php

namespace App\Domains\TimeSheet\Services;

use App\Domains\TimeSheet\Models\Timesheet;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class TimesheetService.
 */
class TimesheetService extends BaseService
{
    /**
     * TimesheetService constructor.
     *
     * @param Timesheet $timesheet
     */
    public function __construct(Timesheet $timesheet)
    {
        $this->model = $timesheet;
    }

    /**
     * @param array $data
     *
     * @return Timesheet
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Timesheet
    {
        DB::beginTransaction();

        try {
            $timesheet = $this->model::create([
                'from' => $data['from'],
                'to' => $data['to'],
                'note' => $data['note'],
                'user_id' => $data['user_id'],
                'status' => $data['status'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this timesheet. Please try again.'));
        }

        DB::commit();

        return $timesheet;
    }

    /**
     * @param Timesheet $timesheet
     * @param array $data
     *
     * @return Timesheet
     * @throws \Throwable
     */
    public function update(Timesheet $timesheet, array $data = []): Timesheet
    {
        DB::beginTransaction();

        try {
            $timesheet->update([
                'from' => $data['from'],
                'to' => $data['to'],
                'note' => $data['note'],
                'user_id' => $data['user_id'],
                'status' => $data['status'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this timesheet. Please try again.'));
        }

        DB::commit();

        return $timesheet;
    }

    /**
     * @param Timesheet $timesheet
     *
     * @return Timesheet
     * @throws GeneralException
     */
    public function delete(Timesheet $timesheet): Timesheet
    {
        if ($this->deleteById($timesheet->id)) {
            return $timesheet;
        }

        throw new GeneralException('There was a problem deleting this timesheet. Please try again.');
    }

    /**
     * @param Timesheet $timesheet
     *
     * @return Timesheet
     * @throws GeneralException
     */
    public function restore(Timesheet $timesheet): Timesheet
    {
        if ($timesheet->restore()) {
            return $timesheet;
        }

        throw new GeneralException(__('There was a problem restoring this  Timesheets. Please try again.'));
    }

    /**
     * @param Timesheet $timesheet
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Timesheet $timesheet): bool
    {
        if ($timesheet->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Timesheets. Please try again.'));
    }
}