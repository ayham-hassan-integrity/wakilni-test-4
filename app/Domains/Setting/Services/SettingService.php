<?php

namespace App\Domains\Setting\Services;

use App\Domains\Setting\Models\Setting;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class SettingService.
 */
class SettingService extends BaseService
{
    /**
     * SettingService constructor.
     *
     * @param Setting $setting
     */
    public function __construct(Setting $setting)
    {
        $this->model = $setting;
    }

    /**
     * @param array $data
     *
     * @return Setting
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Setting
    {
        DB::beginTransaction();

        try {
            $setting = $this->model::create([
                'name' => $data['name'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this setting. Please try again.'));
        }

        DB::commit();

        return $setting;
    }

    /**
     * @param Setting $setting
     * @param array $data
     *
     * @return Setting
     * @throws \Throwable
     */
    public function update(Setting $setting, array $data = []): Setting
    {
        DB::beginTransaction();

        try {
            $setting->update([
                'name' => $data['name'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this setting. Please try again.'));
        }

        DB::commit();

        return $setting;
    }

    /**
     * @param Setting $setting
     *
     * @return Setting
     * @throws GeneralException
     */
    public function delete(Setting $setting): Setting
    {
        if ($this->deleteById($setting->id)) {
            return $setting;
        }

        throw new GeneralException('There was a problem deleting this setting. Please try again.');
    }

    /**
     * @param Setting $setting
     *
     * @return Setting
     * @throws GeneralException
     */
    public function restore(Setting $setting): Setting
    {
        if ($setting->restore()) {
            return $setting;
        }

        throw new GeneralException(__('There was a problem restoring this  Settings. Please try again.'));
    }

    /**
     * @param Setting $setting
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Setting $setting): bool
    {
        if ($setting->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Settings. Please try again.'));
    }
}