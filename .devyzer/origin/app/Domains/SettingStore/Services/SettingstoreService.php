<?php

namespace App\Domains\SettingStore\Services;

use App\Domains\SettingStore\Models\Settingstore;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class SettingstoreService.
 */
class SettingstoreService extends BaseService
{
    /**
     * SettingstoreService constructor.
     *
     * @param Settingstore $settingstore
     */
    public function __construct(Settingstore $settingstore)
    {
        $this->model = $settingstore;
    }

    /**
     * @param array $data
     *
     * @return Settingstore
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Settingstore
    {
        DB::beginTransaction();

        try {
            $settingstore = $this->model::create([
                'store_id' => $data['store_id'],
                'setting_id' => $data['setting_id'],
                'value' => $data['value'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this settingstore. Please try again.'));
        }

        DB::commit();

        return $settingstore;
    }

    /**
     * @param Settingstore $settingstore
     * @param array $data
     *
     * @return Settingstore
     * @throws \Throwable
     */
    public function update(Settingstore $settingstore, array $data = []): Settingstore
    {
        DB::beginTransaction();

        try {
            $settingstore->update([
                'store_id' => $data['store_id'],
                'setting_id' => $data['setting_id'],
                'value' => $data['value'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this settingstore. Please try again.'));
        }

        DB::commit();

        return $settingstore;
    }

    /**
     * @param Settingstore $settingstore
     *
     * @return Settingstore
     * @throws GeneralException
     */
    public function delete(Settingstore $settingstore): Settingstore
    {
        if ($this->deleteById($settingstore->id)) {
            return $settingstore;
        }

        throw new GeneralException('There was a problem deleting this settingstore. Please try again.');
    }

    /**
     * @param Settingstore $settingstore
     *
     * @return Settingstore
     * @throws GeneralException
     */
    public function restore(Settingstore $settingstore): Settingstore
    {
        if ($settingstore->restore()) {
            return $settingstore;
        }

        throw new GeneralException(__('There was a problem restoring this  Settingstores. Please try again.'));
    }

    /**
     * @param Settingstore $settingstore
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Settingstore $settingstore): bool
    {
        if ($settingstore->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Settingstores. Please try again.'));
    }
}