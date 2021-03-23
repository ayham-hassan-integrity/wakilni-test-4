<?php

namespace App\Domains\TelescopeMonitoring\Services;

use App\Domains\TelescopeMonitoring\Models\Telescopemonitoring;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class TelescopemonitoringService.
 */
class TelescopemonitoringService extends BaseService
{
    /**
     * TelescopemonitoringService constructor.
     *
     * @param Telescopemonitoring $telescopemonitoring
     */
    public function __construct(Telescopemonitoring $telescopemonitoring)
    {
        $this->model = $telescopemonitoring;
    }

    /**
     * @param array $data
     *
     * @return Telescopemonitoring
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Telescopemonitoring
    {
        DB::beginTransaction();

        try {
            $telescopemonitoring = $this->model::create([
                'tag' => $data['tag'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this telescopemonitoring. Please try again.'));
        }

        DB::commit();

        return $telescopemonitoring;
    }

    /**
     * @param Telescopemonitoring $telescopemonitoring
     * @param array $data
     *
     * @return Telescopemonitoring
     * @throws \Throwable
     */
    public function update(Telescopemonitoring $telescopemonitoring, array $data = []): Telescopemonitoring
    {
        DB::beginTransaction();

        try {
            $telescopemonitoring->update([
                'tag' => $data['tag'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this telescopemonitoring. Please try again.'));
        }

        DB::commit();

        return $telescopemonitoring;
    }

    /**
     * @param Telescopemonitoring $telescopemonitoring
     *
     * @return Telescopemonitoring
     * @throws GeneralException
     */
    public function delete(Telescopemonitoring $telescopemonitoring): Telescopemonitoring
    {
        if ($this->deleteById($telescopemonitoring->id)) {
            return $telescopemonitoring;
        }

        throw new GeneralException('There was a problem deleting this telescopemonitoring. Please try again.');
    }

    /**
     * @param Telescopemonitoring $telescopemonitoring
     *
     * @return Telescopemonitoring
     * @throws GeneralException
     */
    public function restore(Telescopemonitoring $telescopemonitoring): Telescopemonitoring
    {
        if ($telescopemonitoring->restore()) {
            return $telescopemonitoring;
        }

        throw new GeneralException(__('There was a problem restoring this  Telescopemonitorings. Please try again.'));
    }

    /**
     * @param Telescopemonitoring $telescopemonitoring
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Telescopemonitoring $telescopemonitoring): bool
    {
        if ($telescopemonitoring->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Telescopemonitorings. Please try again.'));
    }
}