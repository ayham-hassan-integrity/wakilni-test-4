<?php

namespace App\Domains\Device\Services;

use App\Domains\Device\Models\Device;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class DeviceService.
 */
class DeviceService extends BaseService
{
    /**
     * DeviceService constructor.
     *
     * @param Device $device
     */
    public function __construct(Device $device)
    {
        $this->model = $device;
    }

    /**
     * @param array $data
     *
     * @return Device
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Device
    {
        DB::beginTransaction();

        try {
            $device = $this->model::create([
                'user_id' => $data['user_id'],
                'type' => $data['type'],
                'token' => $data['token'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this device. Please try again.'));
        }

        DB::commit();

        return $device;
    }

    /**
     * @param Device $device
     * @param array $data
     *
     * @return Device
     * @throws \Throwable
     */
    public function update(Device $device, array $data = []): Device
    {
        DB::beginTransaction();

        try {
            $device->update([
                'user_id' => $data['user_id'],
                'type' => $data['type'],
                'token' => $data['token'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this device. Please try again.'));
        }

        DB::commit();

        return $device;
    }

    /**
     * @param Device $device
     *
     * @return Device
     * @throws GeneralException
     */
    public function delete(Device $device): Device
    {
        if ($this->deleteById($device->id)) {
            return $device;
        }

        throw new GeneralException('There was a problem deleting this device. Please try again.');
    }

    /**
     * @param Device $device
     *
     * @return Device
     * @throws GeneralException
     */
    public function restore(Device $device): Device
    {
        if ($device->restore()) {
            return $device;
        }

        throw new GeneralException(__('There was a problem restoring this  Devices. Please try again.'));
    }

    /**
     * @param Device $device
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Device $device): bool
    {
        if ($device->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Devices. Please try again.'));
    }
}