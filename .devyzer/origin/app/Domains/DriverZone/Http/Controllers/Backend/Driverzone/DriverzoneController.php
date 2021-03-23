<?php

namespace App\Domains\DriverZone\Http\Controllers\Backend\Driverzone;

use App\Http\Controllers\Controller;
use App\Domains\DriverZone\Models\Driverzone;
use App\Domains\DriverZone\Services\DriverzoneService;
use App\Domains\DriverZone\Http\Requests\Backend\Driverzone\DeleteDriverzoneRequest;
use App\Domains\DriverZone\Http\Requests\Backend\Driverzone\EditDriverzoneRequest;
use App\Domains\DriverZone\Http\Requests\Backend\Driverzone\StoreDriverzoneRequest;
use App\Domains\DriverZone\Http\Requests\Backend\Driverzone\UpdateDriverzoneRequest;

/**
 * Class DriverzoneController.
 */
class DriverzoneController extends Controller
{
    /**
     * @var DriverzoneService
     */
    protected $driverzoneService;

    /**
     * DriverzoneController constructor.
     *
     * @param DriverzoneService $driverzoneService
     */
    public function __construct(DriverzoneService $driverzoneService)
    {
        $this->driverzoneService = $driverzoneService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.driver-zone.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.driver-zone.create');
    }

    /**
     * @param StoreDriverzoneRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreDriverzoneRequest $request)
    {
        $driverzone = $this->driverzoneService->store($request->validated());

        return redirect()->route('admin.driverzone.show', $driverzone)->withFlashSuccess(__('The  Driverzones was successfully created.'));
    }

    /**
     * @param Driverzone $driverzone
     *
     * @return mixed
     */
    public function show(Driverzone $driverzone)
    {
        return view('backend.driver-zone.show')
            ->withDriverzone($driverzone);
    }

    /**
     * @param EditDriverzoneRequest $request
     * @param Driverzone $driverzone
     *
     * @return mixed
     */
    public function edit(EditDriverzoneRequest $request, Driverzone $driverzone)
    {
        return view('backend.driver-zone.edit')
            ->withDriverzone($driverzone);
    }

    /**
     * @param UpdateDriverzoneRequest $request
     * @param Driverzone $driverzone
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateDriverzoneRequest $request, Driverzone $driverzone)
    {
        $this->driverzoneService->update($driverzone, $request->validated());

        return redirect()->route('admin.driverzone.show', $driverzone)->withFlashSuccess(__('The  Driverzones was successfully updated.'));
    }

    /**
     * @param DeleteDriverzoneRequest $request
     * @param Driverzone $driverzone
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteDriverzoneRequest $request, Driverzone $driverzone)
    {
        $this->driverzoneService->delete($driverzone);

        return redirect()->route('admin.$driverzone.deleted')->withFlashSuccess(__('The  Driverzones was successfully deleted.'));
    }
}