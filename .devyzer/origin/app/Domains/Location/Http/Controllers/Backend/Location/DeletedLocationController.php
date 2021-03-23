<?php

namespace App\Domains\Location\Http\Controllers\Backend\Location;

use App\Http\Controllers\Controller;
use App\Domains\Location\Models\Location;
use App\Domains\Location\Services\LocationService;

/**
 * Class DeletedLocationController.
 */
class DeletedLocationController extends Controller
{
    /**
     * @var LocationService
     */
    protected $locationService;

    /**
     * DeletedLocationController constructor.
     *
     * @param  LocationService  $locationService
     */
    public function __construct(LocationService $locationService)
    {
        $this->locationService = $locationService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.location.deleted');
    }

    /**
     * @param  Location  $deletedLocation
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Location $deletedLocation)
    {
        $this->locationService->restore($deletedLocation);

        return redirect()->route('admin.location.index')->withFlashSuccess(__('The  Locations was successfully restored.'));
    }

    /**
     * @param  Location  $deletedLocation
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Location $deletedLocation)
    {
        $this->locationService->destroy($deletedLocation);

        return redirect()->route('admin.location.deleted')->withFlashSuccess(__('The  Locations was permanently deleted.'));
    }
}