<?php

namespace App\Domains\TelescopeMonitoring\Http\Controllers\Backend\Telescopemonitoring;

use App\Http\Controllers\Controller;
use App\Domains\TelescopeMonitoring\Models\Telescopemonitoring;
use App\Domains\TelescopeMonitoring\Services\TelescopemonitoringService;

/**
 * Class DeletedTelescopemonitoringController.
 */
class DeletedTelescopemonitoringController extends Controller
{
    /**
     * @var TelescopemonitoringService
     */
    protected $telescopemonitoringService;

    /**
     * DeletedTelescopemonitoringController constructor.
     *
     * @param  TelescopemonitoringService  $telescopemonitoringService
     */
    public function __construct(TelescopemonitoringService $telescopemonitoringService)
    {
        $this->telescopemonitoringService = $telescopemonitoringService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.telescope-monitoring.deleted');
    }

    /**
     * @param  Telescopemonitoring  $deletedTelescopemonitoring
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Telescopemonitoring $deletedTelescopemonitoring)
    {
        $this->telescopemonitoringService->restore($deletedTelescopemonitoring);

        return redirect()->route('admin.telescopemonitoring.index')->withFlashSuccess(__('The  Telescopemonitorings was successfully restored.'));
    }

    /**
     * @param  Telescopemonitoring  $deletedTelescopemonitoring
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Telescopemonitoring $deletedTelescopemonitoring)
    {
        $this->telescopemonitoringService->destroy($deletedTelescopemonitoring);

        return redirect()->route('admin.telescopemonitoring.deleted')->withFlashSuccess(__('The  Telescopemonitorings was permanently deleted.'));
    }
}