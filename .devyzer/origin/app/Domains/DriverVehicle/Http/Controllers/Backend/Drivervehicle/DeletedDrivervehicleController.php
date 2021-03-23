<?php

namespace App\Domains\DriverVehicle\Http\Controllers\Backend\Drivervehicle;

use App\Http\Controllers\Controller;
use App\Domains\DriverVehicle\Models\Drivervehicle;
use App\Domains\DriverVehicle\Services\DrivervehicleService;

/**
 * Class DeletedDrivervehicleController.
 */
class DeletedDrivervehicleController extends Controller
{
    /**
     * @var DrivervehicleService
     */
    protected $drivervehicleService;

    /**
     * DeletedDrivervehicleController constructor.
     *
     * @param  DrivervehicleService  $drivervehicleService
     */
    public function __construct(DrivervehicleService $drivervehicleService)
    {
        $this->drivervehicleService = $drivervehicleService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.driver-vehicle.deleted');
    }

    /**
     * @param  Drivervehicle  $deletedDrivervehicle
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Drivervehicle $deletedDrivervehicle)
    {
        $this->drivervehicleService->restore($deletedDrivervehicle);

        return redirect()->route('admin.drivervehicle.index')->withFlashSuccess(__('The  Drivervehicles was successfully restored.'));
    }

    /**
     * @param  Drivervehicle  $deletedDrivervehicle
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Drivervehicle $deletedDrivervehicle)
    {
        $this->drivervehicleService->destroy($deletedDrivervehicle);

        return redirect()->route('admin.drivervehicle.deleted')->withFlashSuccess(__('The  Drivervehicles was permanently deleted.'));
    }
}