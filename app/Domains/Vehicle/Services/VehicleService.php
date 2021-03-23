<?php

namespace App\Domains\Vehicle\Services;

use App\Domains\Vehicle\Models\Vehicle;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class VehicleService.
 */
class VehicleService extends BaseService
{
    /**
     * VehicleService constructor.
     *
     * @param Vehicle $vehicle
     */
    public function __construct(Vehicle $vehicle)
    {
        $this->model = $vehicle;
    }

    /**
     * @param array $data
     *
     * @return Vehicle
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Vehicle
    {
        DB::beginTransaction();

        try {
            $vehicle = $this->model::create([
                'count' => $data['count'],
                'remaining' => $data['remaining'],
                'maintenance' => $data['maintenance'],
                'type_id' => $data['type_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this vehicle. Please try again.'));
        }

        DB::commit();

        return $vehicle;
    }

    /**
     * @param Vehicle $vehicle
     * @param array $data
     *
     * @return Vehicle
     * @throws \Throwable
     */
    public function update(Vehicle $vehicle, array $data = []): Vehicle
    {
        DB::beginTransaction();

        try {
            $vehicle->update([
                'count' => $data['count'],
                'remaining' => $data['remaining'],
                'maintenance' => $data['maintenance'],
                'type_id' => $data['type_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this vehicle. Please try again.'));
        }

        DB::commit();

        return $vehicle;
    }

    /**
     * @param Vehicle $vehicle
     *
     * @return Vehicle
     * @throws GeneralException
     */
    public function delete(Vehicle $vehicle): Vehicle
    {
        if ($this->deleteById($vehicle->id)) {
            return $vehicle;
        }

        throw new GeneralException('There was a problem deleting this vehicle. Please try again.');
    }

    /**
     * @param Vehicle $vehicle
     *
     * @return Vehicle
     * @throws GeneralException
     */
    public function restore(Vehicle $vehicle): Vehicle
    {
        if ($vehicle->restore()) {
            return $vehicle;
        }

        throw new GeneralException(__('There was a problem restoring this  Vehicles. Please try again.'));
    }

    /**
     * @param Vehicle $vehicle
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Vehicle $vehicle): bool
    {
        if ($vehicle->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Vehicles. Please try again.'));
    }
}