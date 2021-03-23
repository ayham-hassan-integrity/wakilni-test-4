<?php

namespace App\Domains\DriverSubmission\Services;

use App\Domains\DriverSubmission\Models\Driversubmission;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class DriversubmissionService.
 */
class DriversubmissionService extends BaseService
{
    /**
     * DriversubmissionService constructor.
     *
     * @param Driversubmission $driversubmission
     */
    public function __construct(Driversubmission $driversubmission)
    {
        $this->model = $driversubmission;
    }

    /**
     * @param array $data
     *
     * @return Driversubmission
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Driversubmission
    {
        DB::beginTransaction();

        try {
            $driversubmission = $this->model::create([
                'goal_amount' => $data['goal_amount'],
                'note' => $data['note'],
                'status' => $data['status'],
                'driver_id' => $data['driver_id'],
                'operator_note' => $data['operator_note'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this driversubmission. Please try again.'));
        }

        DB::commit();

        return $driversubmission;
    }

    /**
     * @param Driversubmission $driversubmission
     * @param array $data
     *
     * @return Driversubmission
     * @throws \Throwable
     */
    public function update(Driversubmission $driversubmission, array $data = []): Driversubmission
    {
        DB::beginTransaction();

        try {
            $driversubmission->update([
                'goal_amount' => $data['goal_amount'],
                'note' => $data['note'],
                'status' => $data['status'],
                'driver_id' => $data['driver_id'],
                'operator_note' => $data['operator_note'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this driversubmission. Please try again.'));
        }

        DB::commit();

        return $driversubmission;
    }

    /**
     * @param Driversubmission $driversubmission
     *
     * @return Driversubmission
     * @throws GeneralException
     */
    public function delete(Driversubmission $driversubmission): Driversubmission
    {
        if ($this->deleteById($driversubmission->id)) {
            return $driversubmission;
        }

        throw new GeneralException('There was a problem deleting this driversubmission. Please try again.');
    }

    /**
     * @param Driversubmission $driversubmission
     *
     * @return Driversubmission
     * @throws GeneralException
     */
    public function restore(Driversubmission $driversubmission): Driversubmission
    {
        if ($driversubmission->restore()) {
            return $driversubmission;
        }

        throw new GeneralException(__('There was a problem restoring this  Driversubmissions. Please try again.'));
    }

    /**
     * @param Driversubmission $driversubmission
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Driversubmission $driversubmission): bool
    {
        if ($driversubmission->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Driversubmissions. Please try again.'));
    }
}