<?php

namespace App\Domains\Location\Http\Controllers\Backend\Location;

use App\Http\Controllers\Controller;
use App\Domains\Location\Models\Location;
use App\Domains\Location\Services\LocationService;
use App\Domains\Location\Http\Requests\Backend\Location\DeleteLocationRequest;
use App\Domains\Location\Http\Requests\Backend\Location\EditLocationRequest;
use App\Domains\Location\Http\Requests\Backend\Location\StoreLocationRequest;
use App\Domains\Location\Http\Requests\Backend\Location\UpdateLocationRequest;

/**
 * Class LocationController.
 */
class LocationController extends Controller
{
    /**
     * @var LocationService
     */
    protected $locationService;

    /**
     * LocationController constructor.
     *
     * @param LocationService $locationService
     */
    public function __construct(LocationService $locationService)
    {
        $this->locationService = $locationService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.location.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.location.create');
    }

    /**
     * @param StoreLocationRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreLocationRequest $request)
    {
        $location = $this->locationService->store($request->validated());

        return redirect()->route('admin.location.show', $location)->withFlashSuccess(__('The  Locations was successfully created.'));
    }

    /**
     * @param Location $location
     *
     * @return mixed
     */
    public function show(Location $location)
    {
        return view('backend.location.show')
            ->withLocation($location);
    }

    /**
     * @param EditLocationRequest $request
     * @param Location $location
     *
     * @return mixed
     */
    public function edit(EditLocationRequest $request, Location $location)
    {
        return view('backend.location.edit')
            ->withLocation($location);
    }

    /**
     * @param UpdateLocationRequest $request
     * @param Location $location
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateLocationRequest $request, Location $location)
    {
        $this->locationService->update($location, $request->validated());

        return redirect()->route('admin.location.show', $location)->withFlashSuccess(__('The  Locations was successfully updated.'));
    }

    /**
     * @param DeleteLocationRequest $request
     * @param Location $location
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteLocationRequest $request, Location $location)
    {
        $this->locationService->delete($location);

        return redirect()->route('admin.$location.deleted')->withFlashSuccess(__('The  Locations was successfully deleted.'));
    }
}