<?php

namespace App\Domains\Permission\Http\Controllers\Backend\Permission;

use App\Http\Controllers\Controller;
use App\Domains\Permission\Models\Permission;
use App\Domains\Permission\Services\PermissionService;

/**
 * Class DeletedPermissionController.
 */
class DeletedPermissionController extends Controller
{
    /**
     * @var PermissionService
     */
    protected $permissionService;

    /**
     * DeletedPermissionController constructor.
     *
     * @param  PermissionService  $permissionService
     */
    public function __construct(PermissionService $permissionService)
    {
        $this->permissionService = $permissionService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.permission.deleted');
    }

    /**
     * @param  Permission  $deletedPermission
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Permission $deletedPermission)
    {
        $this->permissionService->restore($deletedPermission);

        return redirect()->route('admin.permission.index')->withFlashSuccess(__('The  Permissions was successfully restored.'));
    }

    /**
     * @param  Permission  $deletedPermission
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Permission $deletedPermission)
    {
        $this->permissionService->destroy($deletedPermission);

        return redirect()->route('admin.permission.deleted')->withFlashSuccess(__('The  Permissions was permanently deleted.'));
    }
}