<?php

namespace App\Domains\DriverVehicle\Services;

use App\Domains\DriverVehicle\Models\Drivervehicle;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class DrivervehicleService.
 */
class DrivervehicleService extends BaseService
{
    /**
     * DrivervehicleService constructor.
     *
     * @param Drivervehicle $drivervehicle
     */
    public function __construct(Drivervehicle $drivervehicle)
    {
        $this->model = $drivervehicle;
    }

    /**
     * @param array $data
     *
     * @return Drivervehicle
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Drivervehicle
    {
        DB::beginTransaction();

        try {
            $drivervehicle = $this->model::create([
                'vehicle_id' => $data['vehicle_id'],
                'driver_id' => $data['driver_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this drivervehicle. Please try again.'));
        }

        DB::commit();

        return $drivervehicle;
    }

    /**
     * @param Drivervehicle $drivervehicle
     * @param array $data
     *
     * @return Drivervehicle
     * @throws \Throwable
     */
    public function update(Drivervehicle $drivervehicle, array $data = []): Drivervehicle
    {
        DB::beginTransaction();

        try {
            $drivervehicle->update([
                'vehicle_id' => $data['vehicle_id'],
                'driver_id' => $data['driver_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this drivervehicle. Please try again.'));
        }

        DB::commit();

        return $drivervehicle;
    }

    /**
     * @param Drivervehicle $drivervehicle
     *
     * @return Drivervehicle
     * @throws GeneralException
     */
    public function delete(Drivervehicle $drivervehicle): Drivervehicle
    {
        if ($this->deleteById($drivervehicle->id)) {
            return $drivervehicle;
        }

        throw new GeneralException('There was a problem deleting this drivervehicle. Please try again.');
    }

    /**
     * @param Drivervehicle $drivervehicle
     *
     * @return Drivervehicle
     * @throws GeneralException
     */
    public function restore(Drivervehicle $drivervehicle): Drivervehicle
    {
        if ($drivervehicle->restore()) {
            return $drivervehicle;
        }

        throw new GeneralException(__('There was a problem restoring this  Drivervehicles. Please try again.'));
    }

    /**
     * @param Drivervehicle $drivervehicle
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Drivervehicle $drivervehicle): bool
    {
        if ($drivervehicle->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Drivervehicles. Please try again.'));
    }
}