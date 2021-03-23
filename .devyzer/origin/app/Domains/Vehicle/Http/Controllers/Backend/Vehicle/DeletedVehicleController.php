<?php

namespace App\Domains\Vehicle\Http\Controllers\Backend\Vehicle;

use App\Http\Controllers\Controller;
use App\Domains\Vehicle\Models\Vehicle;
use App\Domains\Vehicle\Services\VehicleService;

/**
 * Class DeletedVehicleController.
 */
class DeletedVehicleController extends Controller
{
    /**
     * @var VehicleService
     */
    protected $vehicleService;

    /**
     * DeletedVehicleController constructor.
     *
     * @param  VehicleService  $vehicleService
     */
    public function __construct(VehicleService $vehicleService)
    {
        $this->vehicleService = $vehicleService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.vehicle.deleted');
    }

    /**
     * @param  Vehicle  $deletedVehicle
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Vehicle $deletedVehicle)
    {
        $this->vehicleService->restore($deletedVehicle);

        return redirect()->route('admin.vehicle.index')->withFlashSuccess(__('The  Vehicles was successfully restored.'));
    }

    /**
     * @param  Vehicle  $deletedVehicle
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Vehicle $deletedVehicle)
    {
        $this->vehicleService->destroy($deletedVehicle);

        return redirect()->route('admin.vehicle.deleted')->withFlashSuccess(__('The  Vehicles was permanently deleted.'));
    }
}