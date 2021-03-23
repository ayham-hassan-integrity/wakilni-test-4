<?php

namespace App\Domains\RoleHaPermission\Services;

use App\Domains\RoleHaPermission\Models\Rolehapermission;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class RolehapermissionService.
 */
class RolehapermissionService extends BaseService
{
    /**
     * RolehapermissionService constructor.
     *
     * @param Rolehapermission $rolehapermission
     */
    public function __construct(Rolehapermission $rolehapermission)
    {
        $this->model = $rolehapermission;
    }

    /**
     * @param array $data
     *
     * @return Rolehapermission
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Rolehapermission
    {
        DB::beginTransaction();

        try {
            $rolehapermission = $this->model::create([
                'permission_id' => $data['permission_id'],
                'role_id' => $data['role_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this rolehapermission. Please try again.'));
        }

        DB::commit();

        return $rolehapermission;
    }

    /**
     * @param Rolehapermission $rolehapermission
     * @param array $data
     *
     * @return Rolehapermission
     * @throws \Throwable
     */
    public function update(Rolehapermission $rolehapermission, array $data = []): Rolehapermission
    {
        DB::beginTransaction();

        try {
            $rolehapermission->update([
                'permission_id' => $data['permission_id'],
                'role_id' => $data['role_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this rolehapermission. Please try again.'));
        }

        DB::commit();

        return $rolehapermission;
    }

    /**
     * @param Rolehapermission $rolehapermission
     *
     * @return Rolehapermission
     * @throws GeneralException
     */
    public function delete(Rolehapermission $rolehapermission): Rolehapermission
    {
        if ($this->deleteById($rolehapermission->id)) {
            return $rolehapermission;
        }

        throw new GeneralException('There was a problem deleting this rolehapermission. Please try again.');
    }

    /**
     * @param Rolehapermission $rolehapermission
     *
     * @return Rolehapermission
     * @throws GeneralException
     */
    public function restore(Rolehapermission $rolehapermission): Rolehapermission
    {
        if ($rolehapermission->restore()) {
            return $rolehapermission;
        }

        throw new GeneralException(__('There was a problem restoring this  Rolehapermissions. Please try again.'));
    }

    /**
     * @param Rolehapermission $rolehapermission
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Rolehapermission $rolehapermission): bool
    {
        if ($rolehapermission->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Rolehapermissions. Please try again.'));
    }
}