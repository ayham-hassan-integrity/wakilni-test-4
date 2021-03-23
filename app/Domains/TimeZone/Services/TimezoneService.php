<?php

namespace App\Domains\TimeZone\Services;

use App\Domains\TimeZone\Models\Timezone;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class TimezoneService.
 */
class TimezoneService extends BaseService
{
    /**
     * TimezoneService constructor.
     *
     * @param Timezone $timezone
     */
    public function __construct(Timezone $timezone)
    {
        $this->model = $timezone;
    }

    /**
     * @param array $data
     *
     * @return Timezone
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Timezone
    {
        DB::beginTransaction();

        try {
            $timezone = $this->model::create([
                'zone' => $data['zone'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this timezone. Please try again.'));
        }

        DB::commit();

        return $timezone;
    }

    /**
     * @param Timezone $timezone
     * @param array $data
     *
     * @return Timezone
     * @throws \Throwable
     */
    public function update(Timezone $timezone, array $data = []): Timezone
    {
        DB::beginTransaction();

        try {
            $timezone->update([
                'zone' => $data['zone'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this timezone. Please try again.'));
        }

        DB::commit();

        return $timezone;
    }

    /**
     * @param Timezone $timezone
     *
     * @return Timezone
     * @throws GeneralException
     */
    public function delete(Timezone $timezone): Timezone
    {
        if ($this->deleteById($timezone->id)) {
            return $timezone;
        }

        throw new GeneralException('There was a problem deleting this timezone. Please try again.');
    }

    /**
     * @param Timezone $timezone
     *
     * @return Timezone
     * @throws GeneralException
     */
    public function restore(Timezone $timezone): Timezone
    {
        if ($timezone->restore()) {
            return $timezone;
        }

        throw new GeneralException(__('There was a problem restoring this  Timezones. Please try again.'));
    }

    /**
     * @param Timezone $timezone
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Timezone $timezone): bool
    {
        if ($timezone->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Timezones. Please try again.'));
    }
}