<?php

namespace App\Domains\DriverStock\Services;

use App\Domains\DriverStock\Models\Driverstock;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class DriverstockService.
 */
class DriverstockService extends BaseService
{
    /**
     * DriverstockService constructor.
     *
     * @param Driverstock $driverstock
     */
    public function __construct(Driverstock $driverstock)
    {
        $this->model = $driverstock;
    }

    /**
     * @param array $data
     *
     * @return Driverstock
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Driverstock
    {
        DB::beginTransaction();

        try {
            $driverstock = $this->model::create([
                'amount' => $data['amount'],
                'stock_id' => $data['stock_id'],
                'driver_id' => $data['driver_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this driverstock. Please try again.'));
        }

        DB::commit();

        return $driverstock;
    }

    /**
     * @param Driverstock $driverstock
     * @param array $data
     *
     * @return Driverstock
     * @throws \Throwable
     */
    public function update(Driverstock $driverstock, array $data = []): Driverstock
    {
        DB::beginTransaction();

        try {
            $driverstock->update([
                'amount' => $data['amount'],
                'stock_id' => $data['stock_id'],
                'driver_id' => $data['driver_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this driverstock. Please try again.'));
        }

        DB::commit();

        return $driverstock;
    }

    /**
     * @param Driverstock $driverstock
     *
     * @return Driverstock
     * @throws GeneralException
     */
    public function delete(Driverstock $driverstock): Driverstock
    {
        if ($this->deleteById($driverstock->id)) {
            return $driverstock;
        }

        throw new GeneralException('There was a problem deleting this driverstock. Please try again.');
    }

    /**
     * @param Driverstock $driverstock
     *
     * @return Driverstock
     * @throws GeneralException
     */
    public function restore(Driverstock $driverstock): Driverstock
    {
        if ($driverstock->restore()) {
            return $driverstock;
        }

        throw new GeneralException(__('There was a problem restoring this  Driverstocks. Please try again.'));
    }

    /**
     * @param Driverstock $driverstock
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Driverstock $driverstock): bool
    {
        if ($driverstock->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Driverstocks. Please try again.'));
    }
}