<?php

namespace App\Domains\Permission\Http\Controllers\Backend\Permission;

use App\Http\Controllers\Controller;
use App\Domains\Permission\Models\Permission;
use App\Domains\Permission\Services\PermissionService;
use App\Domains\Permission\Http\Requests\Backend\Permission\DeletePermissionRequest;
use App\Domains\Permission\Http\Requests\Backend\Permission\EditPermissionRequest;
use App\Domains\Permission\Http\Requests\Backend\Permission\StorePermissionRequest;
use App\Domains\Permission\Http\Requests\Backend\Permission\UpdatePermissionRequest;

/**
 * Class PermissionController.
 */
class PermissionController extends Controller
{
    /**
     * @var PermissionService
     */
    protected $permissionService;

    /**
     * PermissionController constructor.
     *
     * @param PermissionService $permissionService
     */
    public function __construct(PermissionService $permissionService)
    {
        $this->permissionService = $permissionService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.permission.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.permission.create');
    }

    /**
     * @param StorePermissionRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StorePermissionRequest $request)
    {
        $permission = $this->permissionService->store($request->validated());

        return redirect()->route('admin.permission.show', $permission)->withFlashSuccess(__('The  Permissions was successfully created.'));
    }

    /**
     * @param Permission $permission
     *
     * @return mixed
     */
    public function show(Permission $permission)
    {
        return view('backend.permission.show')
            ->withPermission($permission);
    }

    /**
     * @param EditPermissionRequest $request
     * @param Permission $permission
     *
     * @return mixed
     */
    public function edit(EditPermissionRequest $request, Permission $permission)
    {
        return view('backend.permission.edit')
            ->withPermission($permission);
    }

    /**
     * @param UpdatePermissionRequest $request
     * @param Permission $permission
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $this->permissionService->update($permission, $request->validated());

        return redirect()->route('admin.permission.show', $permission)->withFlashSuccess(__('The  Permissions was successfully updated.'));
    }

    /**
     * @param DeletePermissionRequest $request
     * @param Permission $permission
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeletePermissionRequest $request, Permission $permission)
    {
        $this->permissionService->delete($permission);

        return redirect()->route('admin.$permission.deleted')->withFlashSuccess(__('The  Permissions was successfully deleted.'));
    }
}