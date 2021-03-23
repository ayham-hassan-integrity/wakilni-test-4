<?php

namespace App\Domains\RoleHaPermission\Http\Controllers\Backend\Rolehapermission;

use App\Http\Controllers\Controller;
use App\Domains\RoleHaPermission\Models\Rolehapermission;
use App\Domains\RoleHaPermission\Services\RolehapermissionService;

/**
 * Class DeletedRolehapermissionController.
 */
class DeletedRolehapermissionController extends Controller
{
    /**
     * @var RolehapermissionService
     */
    protected $rolehapermissionService;

    /**
     * DeletedRolehapermissionController constructor.
     *
     * @param  RolehapermissionService  $rolehapermissionService
     */
    public function __construct(RolehapermissionService $rolehapermissionService)
    {
        $this->rolehapermissionService = $rolehapermissionService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.role-ha-permission.deleted');
    }

    /**
     * @param  Rolehapermission  $deletedRolehapermission
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Rolehapermission $deletedRolehapermission)
    {
        $this->rolehapermissionService->restore($deletedRolehapermission);

        return redirect()->route('admin.rolehapermission.index')->withFlashSuccess(__('The  Rolehapermissions was successfully restored.'));
    }

    /**
     * @param  Rolehapermission  $deletedRolehapermission
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Rolehapermission $deletedRolehapermission)
    {
        $this->rolehapermissionService->destroy($deletedRolehapermission);

        return redirect()->route('admin.rolehapermission.deleted')->withFlashSuccess(__('The  Rolehapermissions was permanently deleted.'));
    }
}