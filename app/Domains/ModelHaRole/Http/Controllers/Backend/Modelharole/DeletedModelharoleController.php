<?php

namespace App\Domains\ModelHaRole\Http\Controllers\Backend\Modelharole;

use App\Http\Controllers\Controller;
use App\Domains\ModelHaRole\Models\Modelharole;
use App\Domains\ModelHaRole\Services\ModelharoleService;

/**
 * Class DeletedModelharoleController.
 */
class DeletedModelharoleController extends Controller
{
    /**
     * @var ModelharoleService
     */
    protected $modelharoleService;

    /**
     * DeletedModelharoleController constructor.
     *
     * @param  ModelharoleService  $modelharoleService
     */
    public function __construct(ModelharoleService $modelharoleService)
    {
        $this->modelharoleService = $modelharoleService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.model-ha-role.deleted');
    }

    /**
     * @param  Modelharole  $deletedModelharole
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Modelharole $deletedModelharole)
    {
        $this->modelharoleService->restore($deletedModelharole);

        return redirect()->route('admin.modelharole.index')->withFlashSuccess(__('The  Modelharoles was successfully restored.'));
    }

    /**
     * @param  Modelharole  $deletedModelharole
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Modelharole $deletedModelharole)
    {
        $this->modelharoleService->destroy($deletedModelharole);

        return redirect()->route('admin.modelharole.deleted')->withFlashSuccess(__('The  Modelharoles was permanently deleted.'));
    }
}