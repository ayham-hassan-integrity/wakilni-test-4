<?php

namespace App\Domains\ModelHaPermission\Http\Controllers\Backend\Modelhapermission;

use App\Http\Controllers\Controller;
use App\Domains\ModelHaPermission\Models\Modelhapermission;
use App\Domains\ModelHaPermission\Services\ModelhapermissionService;

/**
 * Class DeletedModelhapermissionController.
 */
class DeletedModelhapermissionController extends Controller
{
    /**
     * @var ModelhapermissionService
     */
    protected $modelhapermissionService;

    /**
     * DeletedModelhapermissionController constructor.
     *
     * @param  ModelhapermissionService  $modelhapermissionService
     */
    public function __construct(ModelhapermissionService $modelhapermissionService)
    {
        $this->modelhapermissionService = $modelhapermissionService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.model-ha-permission.deleted');
    }

    /**
     * @param  Modelhapermission  $deletedModelhapermission
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Modelhapermission $deletedModelhapermission)
    {
        $this->modelhapermissionService->restore($deletedModelhapermission);

        return redirect()->route('admin.modelhapermission.index')->withFlashSuccess(__('The  Modelhapermissions was successfully restored.'));
    }

    /**
     * @param  Modelhapermission  $deletedModelhapermission
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Modelhapermission $deletedModelhapermission)
    {
        $this->modelhapermissionService->destroy($deletedModelhapermission);

        return redirect()->route('admin.modelhapermission.deleted')->withFlashSuccess(__('The  Modelhapermissions was permanently deleted.'));
    }
}