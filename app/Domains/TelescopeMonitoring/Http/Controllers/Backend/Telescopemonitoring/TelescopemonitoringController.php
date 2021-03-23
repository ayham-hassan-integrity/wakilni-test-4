<?php

namespace App\Domains\TelescopeMonitoring\Http\Controllers\Backend\Telescopemonitoring;

use App\Http\Controllers\Controller;
use App\Domains\TelescopeMonitoring\Models\Telescopemonitoring;
use App\Domains\TelescopeMonitoring\Services\TelescopemonitoringService;
use App\Domains\TelescopeMonitoring\Http\Requests\Backend\Telescopemonitoring\DeleteTelescopemonitoringRequest;
use App\Domains\TelescopeMonitoring\Http\Requests\Backend\Telescopemonitoring\EditTelescopemonitoringRequest;
use App\Domains\TelescopeMonitoring\Http\Requests\Backend\Telescopemonitoring\StoreTelescopemonitoringRequest;
use App\Domains\TelescopeMonitoring\Http\Requests\Backend\Telescopemonitoring\UpdateTelescopemonitoringRequest;

/**
 * Class TelescopemonitoringController.
 */
class TelescopemonitoringController extends Controller
{
    /**
     * @var TelescopemonitoringService
     */
    protected $telescopemonitoringService;

    /**
     * TelescopemonitoringController constructor.
     *
     * @param TelescopemonitoringService $telescopemonitoringService
     */
    public function __construct(TelescopemonitoringService $telescopemonitoringService)
    {
        $this->telescopemonitoringService = $telescopemonitoringService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.telescope-monitoring.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.telescope-monitoring.create');
    }

    /**
     * @param StoreTelescopemonitoringRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreTelescopemonitoringRequest $request)
    {
        $telescopemonitoring = $this->telescopemonitoringService->store($request->validated());

        return redirect()->route('admin.telescopemonitoring.show', $telescopemonitoring)->withFlashSuccess(__('The  Telescopemonitorings was successfully created.'));
    }

    /**
     * @param Telescopemonitoring $telescopemonitoring
     *
     * @return mixed
     */
    public function show(Telescopemonitoring $telescopemonitoring)
    {
        return view('backend.telescope-monitoring.show')
            ->withTelescopemonitoring($telescopemonitoring);
    }

    /**
     * @param EditTelescopemonitoringRequest $request
     * @param Telescopemonitoring $telescopemonitoring
     *
     * @return mixed
     */
    public function edit(EditTelescopemonitoringRequest $request, Telescopemonitoring $telescopemonitoring)
    {
        return view('backend.telescope-monitoring.edit')
            ->withTelescopemonitoring($telescopemonitoring);
    }

    /**
     * @param UpdateTelescopemonitoringRequest $request
     * @param Telescopemonitoring $telescopemonitoring
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateTelescopemonitoringRequest $request, Telescopemonitoring $telescopemonitoring)
    {
        $this->telescopemonitoringService->update($telescopemonitoring, $request->validated());

        return redirect()->route('admin.telescopemonitoring.show', $telescopemonitoring)->withFlashSuccess(__('The  Telescopemonitorings was successfully updated.'));
    }

    /**
     * @param DeleteTelescopemonitoringRequest $request
     * @param Telescopemonitoring $telescopemonitoring
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteTelescopemonitoringRequest $request, Telescopemonitoring $telescopemonitoring)
    {
        $this->telescopemonitoringService->delete($telescopemonitoring);

        return redirect()->route('admin.$telescopemonitoring.deleted')->withFlashSuccess(__('The  Telescopemonitorings was successfully deleted.'));
    }
}