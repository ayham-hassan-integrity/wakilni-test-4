<?php

namespace App\Domains\LocationLog\Http\Controllers\Backend\Locationlog;

use App\Http\Controllers\Controller;
use App\Domains\LocationLog\Models\Locationlog;
use App\Domains\LocationLog\Services\LocationlogService;
use App\Domains\LocationLog\Http\Requests\Backend\Locationlog\DeleteLocationlogRequest;
use App\Domains\LocationLog\Http\Requests\Backend\Locationlog\EditLocationlogRequest;
use App\Domains\LocationLog\Http\Requests\Backend\Locationlog\StoreLocationlogRequest;
use App\Domains\LocationLog\Http\Requests\Backend\Locationlog\UpdateLocationlogRequest;

/**
 * Class LocationlogController.
 */
class LocationlogController extends Controller
{
    /**
     * @var LocationlogService
     */
    protected $locationlogService;

    /**
     * LocationlogController constructor.
     *
     * @param LocationlogService $locationlogService
     */
    public function __construct(LocationlogService $locationlogService)
    {
        $this->locationlogService = $locationlogService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.location-log.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.location-log.create');
    }

    /**
     * @param StoreLocationlogRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreLocationlogRequest $request)
    {
        $locationlog = $this->locationlogService->store($request->validated());

        return redirect()->route('admin.locationlog.show', $locationlog)->withFlashSuccess(__('The  Locationlogs was successfully created.'));
    }

    /**
     * @param Locationlog $locationlog
     *
     * @return mixed
     */
    public function show(Locationlog $locationlog)
    {
        return view('backend.location-log.show')
            ->withLocationlog($locationlog);
    }

    /**
     * @param EditLocationlogRequest $request
     * @param Locationlog $locationlog
     *
     * @return mixed
     */
    public function edit(EditLocationlogRequest $request, Locationlog $locationlog)
    {
        return view('backend.location-log.edit')
            ->withLocationlog($locationlog);
    }

    /**
     * @param UpdateLocationlogRequest $request
     * @param Locationlog $locationlog
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateLocationlogRequest $request, Locationlog $locationlog)
    {
        $this->locationlogService->update($locationlog, $request->validated());

        return redirect()->route('admin.locationlog.show', $locationlog)->withFlashSuccess(__('The  Locationlogs was successfully updated.'));
    }

    /**
     * @param DeleteLocationlogRequest $request
     * @param Locationlog $locationlog
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteLocationlogRequest $request, Locationlog $locationlog)
    {
        $this->locationlogService->delete($locationlog);

        return redirect()->route('admin.$locationlog.deleted')->withFlashSuccess(__('The  Locationlogs was successfully deleted.'));
    }
}