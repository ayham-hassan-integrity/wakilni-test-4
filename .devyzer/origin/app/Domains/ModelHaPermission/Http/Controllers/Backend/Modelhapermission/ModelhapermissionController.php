<?php

namespace App\Domains\ModelHaPermission\Http\Controllers\Backend\Modelhapermission;

use App\Http\Controllers\Controller;
use App\Domains\ModelHaPermission\Models\Modelhapermission;
use App\Domains\ModelHaPermission\Services\ModelhapermissionService;
use App\Domains\ModelHaPermission\Http\Requests\Backend\Modelhapermission\DeleteModelhapermissionRequest;
use App\Domains\ModelHaPermission\Http\Requests\Backend\Modelhapermission\EditModelhapermissionRequest;
use App\Domains\ModelHaPermission\Http\Requests\Backend\Modelhapermission\StoreModelhapermissionRequest;
use App\Domains\ModelHaPermission\Http\Requests\Backend\Modelhapermission\UpdateModelhapermissionRequest;

/**
 * Class ModelhapermissionController.
 */
class ModelhapermissionController extends Controller
{
    /**
     * @var ModelhapermissionService
     */
    protected $modelhapermissionService;

    /**
     * ModelhapermissionController constructor.
     *
     * @param ModelhapermissionService $modelhapermissionService
     */
    public function __construct(ModelhapermissionService $modelhapermissionService)
    {
        $this->modelhapermissionService = $modelhapermissionService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.model-ha-permission.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.model-ha-permission.create');
    }

    /**
     * @param StoreModelhapermissionRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreModelhapermissionRequest $request)
    {
        $modelhapermission = $this->modelhapermissionService->store($request->validated());

        return redirect()->route('admin.modelhapermission.show', $modelhapermission)->withFlashSuccess(__('The  Modelhapermissions was successfully created.'));
    }

    /**
     * @param Modelhapermission $modelhapermission
     *
     * @return mixed
     */
    public function show(Modelhapermission $modelhapermission)
    {
        return view('backend.model-ha-permission.show')
            ->withModelhapermission($modelhapermission);
    }

    /**
     * @param EditModelhapermissionRequest $request
     * @param Modelhapermission $modelhapermission
     *
     * @return mixed
     */
    public function edit(EditModelhapermissionRequest $request, Modelhapermission $modelhapermission)
    {
        return view('backend.model-ha-permission.edit')
            ->withModelhapermission($modelhapermission);
    }

    /**
     * @param UpdateModelhapermissionRequest $request
     * @param Modelhapermission $modelhapermission
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateModelhapermissionRequest $request, Modelhapermission $modelhapermission)
    {
        $this->modelhapermissionService->update($modelhapermission, $request->validated());

        return redirect()->route('admin.modelhapermission.show', $modelhapermission)->withFlashSuccess(__('The  Modelhapermissions was successfully updated.'));
    }

    /**
     * @param DeleteModelhapermissionRequest $request
     * @param Modelhapermission $modelhapermission
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteModelhapermissionRequest $request, Modelhapermission $modelhapermission)
    {
        $this->modelhapermissionService->delete($modelhapermission);

        return redirect()->route('admin.$modelhapermission.deleted')->withFlashSuccess(__('The  Modelhapermissions was successfully deleted.'));
    }
}