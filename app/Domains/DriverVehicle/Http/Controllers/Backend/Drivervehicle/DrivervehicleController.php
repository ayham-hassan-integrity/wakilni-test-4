<?php

namespace App\Domains\DriverVehicle\Http\Controllers\Backend\Drivervehicle;

use App\Http\Controllers\Controller;
use App\Domains\DriverVehicle\Models\Drivervehicle;
use App\Domains\DriverVehicle\Services\DrivervehicleService;
use App\Domains\DriverVehicle\Http\Requests\Backend\Drivervehicle\DeleteDrivervehicleRequest;
use App\Domains\DriverVehicle\Http\Requests\Backend\Drivervehicle\EditDrivervehicleRequest;
use App\Domains\DriverVehicle\Http\Requests\Backend\Drivervehicle\StoreDrivervehicleRequest;
use App\Domains\DriverVehicle\Http\Requests\Backend\Drivervehicle\UpdateDrivervehicleRequest;

/**
 * Class DrivervehicleController.
 */
class DrivervehicleController extends Controller
{
    /**
     * @var DrivervehicleService
     */
    protected $drivervehicleService;

    /**
     * DrivervehicleController constructor.
     *
     * @param DrivervehicleService $drivervehicleService
     */
    public function __construct(DrivervehicleService $drivervehicleService)
    {
        $this->drivervehicleService = $drivervehicleService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.driver-vehicle.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.driver-vehicle.create');
    }

    /**
     * @param StoreDrivervehicleRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreDrivervehicleRequest $request)
    {
        $drivervehicle = $this->drivervehicleService->store($request->validated());

        return redirect()->route('admin.drivervehicle.show', $drivervehicle)->withFlashSuccess(__('The  Drivervehicles was successfully created.'));
    }

    /**
     * @param Drivervehicle $drivervehicle
     *
     * @return mixed
     */
    public function show(Drivervehicle $drivervehicle)
    {
        return view('backend.driver-vehicle.show')
            ->withDrivervehicle($drivervehicle);
    }

    /**
     * @param EditDrivervehicleRequest $request
     * @param Drivervehicle $drivervehicle
     *
     * @return mixed
     */
    public function edit(EditDrivervehicleRequest $request, Drivervehicle $drivervehicle)
    {
        return view('backend.driver-vehicle.edit')
            ->withDrivervehicle($drivervehicle);
    }

    /**
     * @param UpdateDrivervehicleRequest $request
     * @param Drivervehicle $drivervehicle
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateDrivervehicleRequest $request, Drivervehicle $drivervehicle)
    {
        $this->drivervehicleService->update($drivervehicle, $request->validated());

        return redirect()->route('admin.drivervehicle.show', $drivervehicle)->withFlashSuccess(__('The  Drivervehicles was successfully updated.'));
    }

    /**
     * @param DeleteDrivervehicleRequest $request
     * @param Drivervehicle $drivervehicle
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteDrivervehicleRequest $request, Drivervehicle $drivervehicle)
    {
        $this->drivervehicleService->delete($drivervehicle);

        return redirect()->route('admin.$drivervehicle.deleted')->withFlashSuccess(__('The  Drivervehicles was successfully deleted.'));
    }
}