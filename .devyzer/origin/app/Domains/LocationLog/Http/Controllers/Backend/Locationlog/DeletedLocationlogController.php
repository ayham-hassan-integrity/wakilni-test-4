<?php

namespace App\Domains\LocationLog\Http\Controllers\Backend\Locationlog;

use App\Http\Controllers\Controller;
use App\Domains\LocationLog\Models\Locationlog;
use App\Domains\LocationLog\Services\LocationlogService;

/**
 * Class DeletedLocationlogController.
 */
class DeletedLocationlogController extends Controller
{
    /**
     * @var LocationlogService
     */
    protected $locationlogService;

    /**
     * DeletedLocationlogController constructor.
     *
     * @param  LocationlogService  $locationlogService
     */
    public function __construct(LocationlogService $locationlogService)
    {
        $this->locationlogService = $locationlogService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.location-log.deleted');
    }

    /**
     * @param  Locationlog  $deletedLocationlog
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Locationlog $deletedLocationlog)
    {
        $this->locationlogService->restore($deletedLocationlog);

        return redirect()->route('admin.locationlog.index')->withFlashSuccess(__('The  Locationlogs was successfully restored.'));
    }

    /**
     * @param  Locationlog  $deletedLocationlog
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Locationlog $deletedLocationlog)
    {
        $this->locationlogService->destroy($deletedLocationlog);

        return redirect()->route('admin.locationlog.deleted')->withFlashSuccess(__('The  Locationlogs was permanently deleted.'));
    }
}