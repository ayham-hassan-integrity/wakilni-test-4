<?php

namespace App\Domains\Permission\Services;

use App\Domains\Permission\Models\Permission;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class PermissionService.
 */
class PermissionService extends BaseService
{
    /**
     * PermissionService constructor.
     *
     * @param Permission $permission
     */
    public function __construct(Permission $permission)
    {
        $this->model = $permission;
    }

    /**
     * @param array $data
     *
     * @return Permission
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Permission
    {
        DB::beginTransaction();

        try {
            $permission = $this->model::create([
                'name' => $data['name'],
                'guard_name' => $data['guard_name'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this permission. Please try again.'));
        }

        DB::commit();

        return $permission;
    }

    /**
     * @param Permission $permission
     * @param array $data
     *
     * @return Permission
     * @throws \Throwable
     */
    public function update(Permission $permission, array $data = []): Permission
    {
        DB::beginTransaction();

        try {
            $permission->update([
                'name' => $data['name'],
                'guard_name' => $data['guard_name'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this permission. Please try again.'));
        }

        DB::commit();

        return $permission;
    }

    /**
     * @param Permission $permission
     *
     * @return Permission
     * @throws GeneralException
     */
    public function delete(Permission $permission): Permission
    {
        if ($this->deleteById($permission->id)) {
            return $permission;
        }

        throw new GeneralException('There was a problem deleting this permission. Please try again.');
    }

    /**
     * @param Permission $permission
     *
     * @return Permission
     * @throws GeneralException
     */
    public function restore(Permission $permission): Permission
    {
        if ($permission->restore()) {
            return $permission;
        }

        throw new GeneralException(__('There was a problem restoring this  Permissions. Please try again.'));
    }

    /**
     * @param Permission $permission
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Permission $permission): bool
    {
        if ($permission->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Permissions. Please try again.'));
    }
}