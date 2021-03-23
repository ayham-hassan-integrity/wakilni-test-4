<?php

namespace App\Domains\Migration\Services;

use App\Domains\Migration\Models\Migration;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class MigrationService.
 */
class MigrationService extends BaseService
{
    /**
     * MigrationService constructor.
     *
     * @param Migration $migration
     */
    public function __construct(Migration $migration)
    {
        $this->model = $migration;
    }

    /**
     * @param array $data
     *
     * @return Migration
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Migration
    {
        DB::beginTransaction();

        try {
            $migration = $this->model::create([
                'migration' => $data['migration'],
                'batch' => $data['batch'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this migration. Please try again.'));
        }

        DB::commit();

        return $migration;
    }

    /**
     * @param Migration $migration
     * @param array $data
     *
     * @return Migration
     * @throws \Throwable
     */
    public function update(Migration $migration, array $data = []): Migration
    {
        DB::beginTransaction();

        try {
            $migration->update([
                'migration' => $data['migration'],
                'batch' => $data['batch'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this migration. Please try again.'));
        }

        DB::commit();

        return $migration;
    }

    /**
     * @param Migration $migration
     *
     * @return Migration
     * @throws GeneralException
     */
    public function delete(Migration $migration): Migration
    {
        if ($this->deleteById($migration->id)) {
            return $migration;
        }

        throw new GeneralException('There was a problem deleting this migration. Please try again.');
    }

    /**
     * @param Migration $migration
     *
     * @return Migration
     * @throws GeneralException
     */
    public function restore(Migration $migration): Migration
    {
        if ($migration->restore()) {
            return $migration;
        }

        throw new GeneralException(__('There was a problem restoring this  Migrations. Please try again.'));
    }

    /**
     * @param Migration $migration
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Migration $migration): bool
    {
        if ($migration->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Migrations. Please try again.'));
    }
}