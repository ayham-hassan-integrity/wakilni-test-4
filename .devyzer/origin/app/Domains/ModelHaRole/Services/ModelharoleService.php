<?php

namespace App\Domains\ModelHaRole\Services;

use App\Domains\ModelHaRole\Models\Modelharole;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class ModelharoleService.
 */
class ModelharoleService extends BaseService
{
    /**
     * ModelharoleService constructor.
     *
     * @param Modelharole $modelharole
     */
    public function __construct(Modelharole $modelharole)
    {
        $this->model = $modelharole;
    }

    /**
     * @param array $data
     *
     * @return Modelharole
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Modelharole
    {
        DB::beginTransaction();

        try {
            $modelharole = $this->model::create([
                'role_id' => $data['role_id'],
                'model_id' => $data['model_id'],
                'model_type' => $data['model_type'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this modelharole. Please try again.'));
        }

        DB::commit();

        return $modelharole;
    }

    /**
     * @param Modelharole $modelharole
     * @param array $data
     *
     * @return Modelharole
     * @throws \Throwable
     */
    public function update(Modelharole $modelharole, array $data = []): Modelharole
    {
        DB::beginTransaction();

        try {
            $modelharole->update([
                'role_id' => $data['role_id'],
                'model_id' => $data['model_id'],
                'model_type' => $data['model_type'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this modelharole. Please try again.'));
        }

        DB::commit();

        return $modelharole;
    }

    /**
     * @param Modelharole $modelharole
     *
     * @return Modelharole
     * @throws GeneralException
     */
    public function delete(Modelharole $modelharole): Modelharole
    {
        if ($this->deleteById($modelharole->id)) {
            return $modelharole;
        }

        throw new GeneralException('There was a problem deleting this modelharole. Please try again.');
    }

    /**
     * @param Modelharole $modelharole
     *
     * @return Modelharole
     * @throws GeneralException
     */
    public function restore(Modelharole $modelharole): Modelharole
    {
        if ($modelharole->restore()) {
            return $modelharole;
        }

        throw new GeneralException(__('There was a problem restoring this  Modelharoles. Please try again.'));
    }

    /**
     * @param Modelharole $modelharole
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Modelharole $modelharole): bool
    {
        if ($modelharole->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Modelharoles. Please try again.'));
    }
}