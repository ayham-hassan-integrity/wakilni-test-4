<?php

namespace App\Domains\Driver\Services;

use App\Domains\Driver\Models\Driver;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class DriverService.
 */
class DriverService extends BaseService
{
    /**
     * DriverService constructor.
     *
     * @param Driver $driver
     */
    public function __construct(Driver $driver)
    {
        $this->model = $driver;
    }

    /**
     * @param array $data
     *
     * @return Driver
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Driver
    {
        DB::beginTransaction();

        try {
            $driver = $this->model::create([
                'nationality' => $data['nationality'],
                'color' => $data['color'],
                'has_gps' => $data['has_gps'],
                'has_internet' => $data['has_internet'],
                'status' => $data['status'],
                'user_id' => $data['user_id'],
                'type_id' => $data['type_id'],
                'now_driving' => $data['now_driving'],
                'is_active' => $data['is_active'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this driver. Please try again.'));
        }

        DB::commit();

        return $driver;
    }

    /**
     * @param Driver $driver
     * @param array $data
     *
     * @return Driver
     * @throws \Throwable
     */
    public function update(Driver $driver, array $data = []): Driver
    {
        DB::beginTransaction();

        try {
            $driver->update([
                'nationality' => $data['nationality'],
                'color' => $data['color'],
                'has_gps' => $data['has_gps'],
                'has_internet' => $data['has_internet'],
                'status' => $data['status'],
                'user_id' => $data['user_id'],
                'type_id' => $data['type_id'],
                'now_driving' => $data['now_driving'],
                'is_active' => $data['is_active'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this driver. Please try again.'));
        }

        DB::commit();

        return $driver;
    }

    /**
     * @param Driver $driver
     *
     * @return Driver
     * @throws GeneralException
     */
    public function delete(Driver $driver): Driver
    {
        if ($this->deleteById($driver->id)) {
            return $driver;
        }

        throw new GeneralException('There was a problem deleting this driver. Please try again.');
    }

    /**
     * @param Driver $driver
     *
     * @return Driver
     * @throws GeneralException
     */
    public function restore(Driver $driver): Driver
    {
        if ($driver->restore()) {
            return $driver;
        }

        throw new GeneralException(__('There was a problem restoring this  Drivers. Please try again.'));
    }

    /**
     * @param Driver $driver
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Driver $driver): bool
    {
        if ($driver->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Drivers. Please try again.'));
    }
}