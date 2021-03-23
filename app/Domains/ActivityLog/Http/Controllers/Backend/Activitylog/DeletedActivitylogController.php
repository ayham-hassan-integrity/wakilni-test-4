<?php

namespace App\Domains\ActivityLog\Http\Controllers\Backend\Activitylog;

use App\Http\Controllers\Controller;
use App\Domains\ActivityLog\Models\Activitylog;
use App\Domains\ActivityLog\Services\ActivitylogService;

/**
 * Class DeletedActivitylogController.
 */
class DeletedActivitylogController extends Controller
{
    /**
     * @var ActivitylogService
     */
    protected $activitylogService;

    /**
     * DeletedActivitylogController constructor.
     *
     * @param  ActivitylogService  $activitylogService
     */
    public function __construct(ActivitylogService $activitylogService)
    {
        $this->activitylogService = $activitylogService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.activity-log.deleted');
    }

    /**
     * @param  Activitylog  $deletedActivitylog
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Activitylog $deletedActivitylog)
    {
        $this->activitylogService->restore($deletedActivitylog);

        return redirect()->route('admin.activitylog.index')->withFlashSuccess(__('The  Activitylogs was successfully restored.'));
    }

    /**
     * @param  Activitylog  $deletedActivitylog
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Activitylog $deletedActivitylog)
    {
        $this->activitylogService->destroy($deletedActivitylog);

        return redirect()->route('admin.activitylog.deleted')->withFlashSuccess(__('The  Activitylogs was permanently deleted.'));
    }
}