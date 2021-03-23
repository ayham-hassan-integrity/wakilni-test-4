<?php

namespace App\Domains\ActivityLog\Http\Controllers\Backend\Activitylog;

use App\Http\Controllers\Controller;
use App\Domains\ActivityLog\Models\Activitylog;
use App\Domains\ActivityLog\Services\ActivitylogService;
use App\Domains\ActivityLog\Http\Requests\Backend\Activitylog\DeleteActivitylogRequest;
use App\Domains\ActivityLog\Http\Requests\Backend\Activitylog\EditActivitylogRequest;
use App\Domains\ActivityLog\Http\Requests\Backend\Activitylog\StoreActivitylogRequest;
use App\Domains\ActivityLog\Http\Requests\Backend\Activitylog\UpdateActivitylogRequest;

/**
 * Class ActivitylogController.
 */
class ActivitylogController extends Controller
{
    /**
     * @var ActivitylogService
     */
    protected $activitylogService;

    /**
     * ActivitylogController constructor.
     *
     * @param ActivitylogService $activitylogService
     */
    public function __construct(ActivitylogService $activitylogService)
    {
        $this->activitylogService = $activitylogService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.activity-log.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.activity-log.create');
    }

    /**
     * @param StoreActivitylogRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreActivitylogRequest $request)
    {
        $activitylog = $this->activitylogService->store($request->validated());

        return redirect()->route('admin.activitylog.show', $activitylog)->withFlashSuccess(__('The  Activitylogs was successfully created.'));
    }

    /**
     * @param Activitylog $activitylog
     *
     * @return mixed
     */
    public function show(Activitylog $activitylog)
    {
        return view('backend.activity-log.show')
            ->withActivitylog($activitylog);
    }

    /**
     * @param EditActivitylogRequest $request
     * @param Activitylog $activitylog
     *
     * @return mixed
     */
    public function edit(EditActivitylogRequest $request, Activitylog $activitylog)
    {
        return view('backend.activity-log.edit')
            ->withActivitylog($activitylog);
    }

    /**
     * @param UpdateActivitylogRequest $request
     * @param Activitylog $activitylog
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateActivitylogRequest $request, Activitylog $activitylog)
    {
        $this->activitylogService->update($activitylog, $request->validated());

        return redirect()->route('admin.activitylog.show', $activitylog)->withFlashSuccess(__('The  Activitylogs was successfully updated.'));
    }

    /**
     * @param DeleteActivitylogRequest $request
     * @param Activitylog $activitylog
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteActivitylogRequest $request, Activitylog $activitylog)
    {
        $this->activitylogService->delete($activitylog);

        return redirect()->route('admin.$activitylog.deleted')->withFlashSuccess(__('The  Activitylogs was successfully deleted.'));
    }
}