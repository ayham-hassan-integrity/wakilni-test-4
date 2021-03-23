<?php

namespace App\Domains\ModelHaPermission\Services;

use App\Domains\ModelHaPermission\Models\Modelhapermission;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class ModelhapermissionService.
 */
class ModelhapermissionService extends BaseService
{
    /**
     * ModelhapermissionService constructor.
     *
     * @param Modelhapermission $modelhapermission
     */
    public function __construct(Modelhapermission $modelhapermission)
    {
        $this->model = $modelhapermission;
    }

    /**
     * @param array $data
     *
     * @return Modelhapermission
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Modelhapermission
    {
        DB::beginTransaction();

        try {
            $modelhapermission = $this->model::create([
                'permission_id' => $data['permission_id'],
                'model_id' => $data['model_id'],
                'model_type' => $data['model_type'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this modelhapermission. Please try again.'));
        }

        DB::commit();

        return $modelhapermission;
    }

    /**
     * @param Modelhapermission $modelhapermission
     * @param array $data
     *
     * @return Modelhapermission
     * @throws \Throwable
     */
    public function update(Modelhapermission $modelhapermission, array $data = []): Modelhapermission
    {
        DB::beginTransaction();

        try {
            $modelhapermission->update([
                'permission_id' => $data['permission_id'],
                'model_id' => $data['model_id'],
                'model_type' => $data['model_type'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this modelhapermission. Please try again.'));
        }

        DB::commit();

        return $modelhapermission;
    }

    /**
     * @param Modelhapermission $modelhapermission
     *
     * @return Modelhapermission
     * @throws GeneralException
     */
    public function delete(Modelhapermission $modelhapermission): Modelhapermission
    {
        if ($this->deleteById($modelhapermission->id)) {
            return $modelhapermission;
        }

        throw new GeneralException('There was a problem deleting this modelhapermission. Please try again.');
    }

    /**
     * @param Modelhapermission $modelhapermission
     *
     * @return Modelhapermission
     * @throws GeneralException
     */
    public function restore(Modelhapermission $modelhapermission): Modelhapermission
    {
        if ($modelhapermission->restore()) {
            return $modelhapermission;
        }

        throw new GeneralException(__('There was a problem restoring this  Modelhapermissions. Please try again.'));
    }

    /**
     * @param Modelhapermission $modelhapermission
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Modelhapermission $modelhapermission): bool
    {
        if ($modelhapermission->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Modelhapermissions. Please try again.'));
    }
}