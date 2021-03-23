<?php

namespace App\Domains\Role\Http\Controllers\Backend\Role;

use App\Http\Controllers\Controller;
use App\Domains\Role\Models\Role;
use App\Domains\Role\Services\RoleService;
use App\Domains\Role\Http\Requests\Backend\Role\DeleteRoleRequest;
use App\Domains\Role\Http\Requests\Backend\Role\EditRoleRequest;
use App\Domains\Role\Http\Requests\Backend\Role\StoreRoleRequest;
use App\Domains\Role\Http\Requests\Backend\Role\UpdateRoleRequest;

/**
 * Class RoleController.
 */
class RoleController extends Controller
{
    /**
     * @var RoleService
     */
    protected $roleService;

    /**
     * RoleController constructor.
     *
     * @param RoleService $roleService
     */
    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.role.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.role.create');
    }

    /**
     * @param StoreRoleRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreRoleRequest $request)
    {
        $role = $this->roleService->store($request->validated());

        return redirect()->route('admin.role.show', $role)->withFlashSuccess(__('The  Roles was successfully created.'));
    }

    /**
     * @param Role $role
     *
     * @return mixed
     */
    public function show(Role $role)
    {
        return view('backend.role.show')
            ->withRole($role);
    }

    /**
     * @param EditRoleRequest $request
     * @param Role $role
     *
     * @return mixed
     */
    public function edit(EditRoleRequest $request, Role $role)
    {
        return view('backend.role.edit')
            ->withRole($role);
    }

    /**
     * @param UpdateRoleRequest $request
     * @param Role $role
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $this->roleService->update($role, $request->validated());

        return redirect()->route('admin.role.show', $role)->withFlashSuccess(__('The  Roles was successfully updated.'));
    }

    /**
     * @param DeleteRoleRequest $request
     * @param Role $role
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteRoleRequest $request, Role $role)
    {
        $this->roleService->delete($role);

        return redirect()->route('admin.$role.deleted')->withFlashSuccess(__('The  Roles was successfully deleted.'));
    }
}