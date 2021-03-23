<?php

namespace App\Domains\Package\Services;

use App\Domains\Package\Models\Package;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class PackageService.
 */
class PackageService extends BaseService
{
    /**
     * PackageService constructor.
     *
     * @param Package $package
     */
    public function __construct(Package $package)
    {
        $this->model = $package;
    }

    /**
     * @param array $data
     *
     * @return Package
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Package
    {
        DB::beginTransaction();

        try {
            $package = $this->model::create([
                'quantity' => $data['quantity'],
                'trip_number' => $data['trip_number'],
                'type_id' => $data['type_id'],
                'order_details_id' => $data['order_details_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this package. Please try again.'));
        }

        DB::commit();

        return $package;
    }

    /**
     * @param Package $package
     * @param array $data
     *
     * @return Package
     * @throws \Throwable
     */
    public function update(Package $package, array $data = []): Package
    {
        DB::beginTransaction();

        try {
            $package->update([
                'quantity' => $data['quantity'],
                'trip_number' => $data['trip_number'],
                'type_id' => $data['type_id'],
                'order_details_id' => $data['order_details_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this package. Please try again.'));
        }

        DB::commit();

        return $package;
    }

    /**
     * @param Package $package
     *
     * @return Package
     * @throws GeneralException
     */
    public function delete(Package $package): Package
    {
        if ($this->deleteById($package->id)) {
            return $package;
        }

        throw new GeneralException('There was a problem deleting this package. Please try again.');
    }

    /**
     * @param Package $package
     *
     * @return Package
     * @throws GeneralException
     */
    public function restore(Package $package): Package
    {
        if ($package->restore()) {
            return $package;
        }

        throw new GeneralException(__('There was a problem restoring this  Packages. Please try again.'));
    }

    /**
     * @param Package $package
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Package $package): bool
    {
        if ($package->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Packages. Please try again.'));
    }
}