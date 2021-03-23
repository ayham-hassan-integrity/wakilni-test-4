<?php

namespace App\Domains\Vehicle\Http\Controllers\Backend\Vehicle;

use App\Http\Controllers\Controller;
use App\Domains\Vehicle\Models\Vehicle;
use App\Domains\Vehicle\Services\VehicleService;
use App\Domains\Vehicle\Http\Requests\Backend\Vehicle\DeleteVehicleRequest;
use App\Domains\Vehicle\Http\Requests\Backend\Vehicle\EditVehicleRequest;
use App\Domains\Vehicle\Http\Requests\Backend\Vehicle\StoreVehicleRequest;
use App\Domains\Vehicle\Http\Requests\Backend\Vehicle\UpdateVehicleRequest;

/**
 * Class VehicleController.
 */
class VehicleController extends Controller
{
    /**
     * @var VehicleService
     */
    protected $vehicleService;

    /**
     * VehicleController constructor.
     *
     * @param VehicleService $vehicleService
     */
    public function __construct(VehicleService $vehicleService)
    {
        $this->vehicleService = $vehicleService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.vehicle.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.vehicle.create');
    }

    /**
     * @param StoreVehicleRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreVehicleRequest $request)
    {
        $vehicle = $this->vehicleService->store($request->validated());

        return redirect()->route('admin.vehicle.show', $vehicle)->withFlashSuccess(__('The  Vehicles was successfully created.'));
    }

    /**
     * @param Vehicle $vehicle
     *
     * @return mixed
     */
    public function show(Vehicle $vehicle)
    {
        return view('backend.vehicle.show')
            ->withVehicle($vehicle);
    }

    /**
     * @param EditVehicleRequest $request
     * @param Vehicle $vehicle
     *
     * @return mixed
     */
    public function edit(EditVehicleRequest $request, Vehicle $vehicle)
    {
        return view('backend.vehicle.edit')
            ->withVehicle($vehicle);
    }

    /**
     * @param UpdateVehicleRequest $request
     * @param Vehicle $vehicle
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
    {
        $this->vehicleService->update($vehicle, $request->validated());

        return redirect()->route('admin.vehicle.show', $vehicle)->withFlashSuccess(__('The  Vehicles was successfully updated.'));
    }

    /**
     * @param DeleteVehicleRequest $request
     * @param Vehicle $vehicle
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteVehicleRequest $request, Vehicle $vehicle)
    {
        $this->vehicleService->delete($vehicle);

        return redirect()->route('admin.$vehicle.deleted')->withFlashSuccess(__('The  Vehicles was successfully deleted.'));
    }
}