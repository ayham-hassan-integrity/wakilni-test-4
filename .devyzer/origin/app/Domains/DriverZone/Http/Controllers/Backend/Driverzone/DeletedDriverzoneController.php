<?php

namespace App\Domains\DriverZone\Http\Controllers\Backend\Driverzone;

use App\Http\Controllers\Controller;
use App\Domains\DriverZone\Models\Driverzone;
use App\Domains\DriverZone\Services\DriverzoneService;

/**
 * Class DeletedDriverzoneController.
 */
class DeletedDriverzoneController extends Controller
{
    /**
     * @var DriverzoneService
     */
    protected $driverzoneService;

    /**
     * DeletedDriverzoneController constructor.
     *
     * @param  DriverzoneService  $driverzoneService
     */
    public function __construct(DriverzoneService $driverzoneService)
    {
        $this->driverzoneService = $driverzoneService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.driver-zone.deleted');
    }

    /**
     * @param  Driverzone  $deletedDriverzone
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Driverzone $deletedDriverzone)
    {
        $this->driverzoneService->restore($deletedDriverzone);

        return redirect()->route('admin.driverzone.index')->withFlashSuccess(__('The  Driverzones was successfully restored.'));
    }

    /**
     * @param  Driverzone  $deletedDriverzone
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Driverzone $deletedDriverzone)
    {
        $this->driverzoneService->destroy($deletedDriverzone);

        return redirect()->route('admin.driverzone.deleted')->withFlashSuccess(__('The  Driverzones was permanently deleted.'));
    }
}