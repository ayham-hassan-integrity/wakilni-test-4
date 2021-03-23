<?php

namespace App\Domains\RoleHaPermission\Http\Controllers\Backend\Rolehapermission;

use App\Http\Controllers\Controller;
use App\Domains\RoleHaPermission\Models\Rolehapermission;
use App\Domains\RoleHaPermission\Services\RolehapermissionService;
use App\Domains\RoleHaPermission\Http\Requests\Backend\Rolehapermission\DeleteRolehapermissionRequest;
use App\Domains\RoleHaPermission\Http\Requests\Backend\Rolehapermission\EditRolehapermissionRequest;
use App\Domains\RoleHaPermission\Http\Requests\Backend\Rolehapermission\StoreRolehapermissionRequest;
use App\Domains\RoleHaPermission\Http\Requests\Backend\Rolehapermission\UpdateRolehapermissionRequest;

/**
 * Class RolehapermissionController.
 */
class RolehapermissionController extends Controller
{
    /**
     * @var RolehapermissionService
     */
    protected $rolehapermissionService;

    /**
     * RolehapermissionController constructor.
     *
     * @param RolehapermissionService $rolehapermissionService
     */
    public function __construct(RolehapermissionService $rolehapermissionService)
    {
        $this->rolehapermissionService = $rolehapermissionService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.role-ha-permission.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.role-ha-permission.create');
    }

    /**
     * @param StoreRolehapermissionRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreRolehapermissionRequest $request)
    {
        $rolehapermission = $this->rolehapermissionService->store($request->validated());

        return redirect()->route('admin.rolehapermission.show', $rolehapermission)->withFlashSuccess(__('The  Rolehapermissions was successfully created.'));
    }

    /**
     * @param Rolehapermission $rolehapermission
     *
     * @return mixed
     */
    public function show(Rolehapermission $rolehapermission)
    {
        return view('backend.role-ha-permission.show')
            ->withRolehapermission($rolehapermission);
    }

    /**
     * @param EditRolehapermissionRequest $request
     * @param Rolehapermission $rolehapermission
     *
     * @return mixed
     */
    public function edit(EditRolehapermissionRequest $request, Rolehapermission $rolehapermission)
    {
        return view('backend.role-ha-permission.edit')
            ->withRolehapermission($rolehapermission);
    }

    /**
     * @param UpdateRolehapermissionRequest $request
     * @param Rolehapermission $rolehapermission
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateRolehapermissionRequest $request, Rolehapermission $rolehapermission)
    {
        $this->rolehapermissionService->update($rolehapermission, $request->validated());

        return redirect()->route('admin.rolehapermission.show', $rolehapermission)->withFlashSuccess(__('The  Rolehapermissions was successfully updated.'));
    }

    /**
     * @param DeleteRolehapermissionRequest $request
     * @param Rolehapermission $rolehapermission
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteRolehapermissionRequest $request, Rolehapermission $rolehapermission)
    {
        $this->rolehapermissionService->delete($rolehapermission);

        return redirect()->route('admin.$rolehapermission.deleted')->withFlashSuccess(__('The  Rolehapermissions was successfully deleted.'));
    }
}