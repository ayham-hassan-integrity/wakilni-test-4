<?php

namespace App\Domains\Role\Http\Controllers\Backend\Role;

use App\Http\Controllers\Controller;
use App\Domains\Role\Models\Role;
use App\Domains\Role\Services\RoleService;

/**
 * Class DeletedRoleController.
 */
class DeletedRoleController extends Controller
{
    /**
     * @var RoleService
     */
    protected $roleService;

    /**
     * DeletedRoleController constructor.
     *
     * @param  RoleService  $roleService
     */
    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.role.deleted');
    }

    /**
     * @param  Role  $deletedRole
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Role $deletedRole)
    {
        $this->roleService->restore($deletedRole);

        return redirect()->route('admin.role.index')->withFlashSuccess(__('The  Roles was successfully restored.'));
    }

    /**
     * @param  Role  $deletedRole
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Role $deletedRole)
    {
        $this->roleService->destroy($deletedRole);

        return redirect()->route('admin.role.deleted')->withFlashSuccess(__('The  Roles was permanently deleted.'));
    }
}