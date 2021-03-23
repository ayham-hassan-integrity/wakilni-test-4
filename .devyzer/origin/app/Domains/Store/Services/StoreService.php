<?php

namespace App\Domains\Store\Services;

use App\Domains\Store\Models\Store;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class StoreService.
 */
class StoreService extends BaseService
{
    /**
     * StoreService constructor.
     *
     * @param Store $store
     */
    public function __construct(Store $store)
    {
        $this->model = $store;
    }

    /**
     * @param array $data
     *
     * @return Store
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Store
    {
        DB::beginTransaction();

        try {
            $store = $this->model::create([
                'name' => $data['name'],
                'prefix' => $data['prefix'],
                'area' => $data['area'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this store. Please try again.'));
        }

        DB::commit();

        return $store;
    }

    /**
     * @param Store $store
     * @param array $data
     *
     * @return Store
     * @throws \Throwable
     */
    public function update(Store $store, array $data = []): Store
    {
        DB::beginTransaction();

        try {
            $store->update([
                'name' => $data['name'],
                'prefix' => $data['prefix'],
                'area' => $data['area'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this store. Please try again.'));
        }

        DB::commit();

        return $store;
    }

    /**
     * @param Store $store
     *
     * @return Store
     * @throws GeneralException
     */
    public function delete(Store $store): Store
    {
        if ($this->deleteById($store->id)) {
            return $store;
        }

        throw new GeneralException('There was a problem deleting this store. Please try again.');
    }

    /**
     * @param Store $store
     *
     * @return Store
     * @throws GeneralException
     */
    public function restore(Store $store): Store
    {
        if ($store->restore()) {
            return $store;
        }

        throw new GeneralException(__('There was a problem restoring this  Stores. Please try again.'));
    }

    /**
     * @param Store $store
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Store $store): bool
    {
        if ($store->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Stores. Please try again.'));
    }
}