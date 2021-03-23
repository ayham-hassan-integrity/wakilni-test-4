<?php

namespace App\Domains\DriverZone\Services;

use App\Domains\DriverZone\Models\Driverzone;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class DriverzoneService.
 */
class DriverzoneService extends BaseService
{
    /**
     * DriverzoneService constructor.
     *
     * @param Driverzone $driverzone
     */
    public function __construct(Driverzone $driverzone)
    {
        $this->model = $driverzone;
    }

    /**
     * @param array $data
     *
     * @return Driverzone
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Driverzone
    {
        DB::beginTransaction();

        try {
            $driverzone = $this->model::create([
                'zone_id' => $data['zone_id'],
                'driver_id' => $data['driver_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this driverzone. Please try again.'));
        }

        DB::commit();

        return $driverzone;
    }

    /**
     * @param Driverzone $driverzone
     * @param array $data
     *
     * @return Driverzone
     * @throws \Throwable
     */
    public function update(Driverzone $driverzone, array $data = []): Driverzone
    {
        DB::beginTransaction();

        try {
            $driverzone->update([
                'zone_id' => $data['zone_id'],
                'driver_id' => $data['driver_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this driverzone. Please try again.'));
        }

        DB::commit();

        return $driverzone;
    }

    /**
     * @param Driverzone $driverzone
     *
     * @return Driverzone
     * @throws GeneralException
     */
    public function delete(Driverzone $driverzone): Driverzone
    {
        if ($this->deleteById($driverzone->id)) {
            return $driverzone;
        }

        throw new GeneralException('There was a problem deleting this driverzone. Please try again.');
    }

    /**
     * @param Driverzone $driverzone
     *
     * @return Driverzone
     * @throws GeneralException
     */
    public function restore(Driverzone $driverzone): Driverzone
    {
        if ($driverzone->restore()) {
            return $driverzone;
        }

        throw new GeneralException(__('There was a problem restoring this  Driverzones. Please try again.'));
    }

    /**
     * @param Driverzone $driverzone
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Driverzone $driverzone): bool
    {
        if ($driverzone->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Driverzones. Please try again.'));
    }
}