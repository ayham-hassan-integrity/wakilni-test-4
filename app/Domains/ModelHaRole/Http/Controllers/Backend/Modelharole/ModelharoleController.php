<?php

namespace App\Domains\ModelHaRole\Http\Controllers\Backend\Modelharole;

use App\Http\Controllers\Controller;
use App\Domains\ModelHaRole\Models\Modelharole;
use App\Domains\ModelHaRole\Services\ModelharoleService;
use App\Domains\ModelHaRole\Http\Requests\Backend\Modelharole\DeleteModelharoleRequest;
use App\Domains\ModelHaRole\Http\Requests\Backend\Modelharole\EditModelharoleRequest;
use App\Domains\ModelHaRole\Http\Requests\Backend\Modelharole\StoreModelharoleRequest;
use App\Domains\ModelHaRole\Http\Requests\Backend\Modelharole\UpdateModelharoleRequest;

/**
 * Class ModelharoleController.
 */
class ModelharoleController extends Controller
{
    /**
     * @var ModelharoleService
     */
    protected $modelharoleService;

    /**
     * ModelharoleController constructor.
     *
     * @param ModelharoleService $modelharoleService
     */
    public function __construct(ModelharoleService $modelharoleService)
    {
        $this->modelharoleService = $modelharoleService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.model-ha-role.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.model-ha-role.create');
    }

    /**
     * @param StoreModelharoleRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreModelharoleRequest $request)
    {
        $modelharole = $this->modelharoleService->store($request->validated());

        return redirect()->route('admin.modelharole.show', $modelharole)->withFlashSuccess(__('The  Modelharoles was successfully created.'));
    }

    /**
     * @param Modelharole $modelharole
     *
     * @return mixed
     */
    public function show(Modelharole $modelharole)
    {
        return view('backend.model-ha-role.show')
            ->withModelharole($modelharole);
    }

    /**
     * @param EditModelharoleRequest $request
     * @param Modelharole $modelharole
     *
     * @return mixed
     */
    public function edit(EditModelharoleRequest $request, Modelharole $modelharole)
    {
        return view('backend.model-ha-role.edit')
            ->withModelharole($modelharole);
    }

    /**
     * @param UpdateModelharoleRequest $request
     * @param Modelharole $modelharole
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateModelharoleRequest $request, Modelharole $modelharole)
    {
        $this->modelharoleService->update($modelharole, $request->validated());

        return redirect()->route('admin.modelharole.show', $modelharole)->withFlashSuccess(__('The  Modelharoles was successfully updated.'));
    }

    /**
     * @param DeleteModelharoleRequest $request
     * @param Modelharole $modelharole
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteModelharoleRequest $request, Modelharole $modelharole)
    {
        $this->modelharoleService->delete($modelharole);

        return redirect()->route('admin.$modelharole.deleted')->withFlashSuccess(__('The  Modelharoles was successfully deleted.'));
    }
}