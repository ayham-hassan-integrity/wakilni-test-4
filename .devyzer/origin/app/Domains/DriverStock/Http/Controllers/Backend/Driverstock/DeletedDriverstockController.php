<?php

namespace App\Domains\DriverStock\Http\Controllers\Backend\Driverstock;

use App\Http\Controllers\Controller;
use App\Domains\DriverStock\Models\Driverstock;
use App\Domains\DriverStock\Services\DriverstockService;

/**
 * Class DeletedDriverstockController.
 */
class DeletedDriverstockController extends Controller
{
    /**
     * @var DriverstockService
     */
    protected $driverstockService;

    /**
     * DeletedDriverstockController constructor.
     *
     * @param  DriverstockService  $driverstockService
     */
    public function __construct(DriverstockService $driverstockService)
    {
        $this->driverstockService = $driverstockService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.driver-stock.deleted');
    }

    /**
     * @param  Driverstock  $deletedDriverstock
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Driverstock $deletedDriverstock)
    {
        $this->driverstockService->restore($deletedDriverstock);

        return redirect()->route('admin.driverstock.index')->withFlashSuccess(__('The  Driverstocks was successfully restored.'));
    }

    /**
     * @param  Driverstock  $deletedDriverstock
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Driverstock $deletedDriverstock)
    {
        $this->driverstockService->destroy($deletedDriverstock);

        return redirect()->route('admin.driverstock.deleted')->withFlashSuccess(__('The  Driverstocks was permanently deleted.'));
    }
}