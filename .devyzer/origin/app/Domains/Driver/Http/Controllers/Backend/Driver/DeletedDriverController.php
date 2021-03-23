<?php

namespace App\Domains\Driver\Http\Controllers\Backend\Driver;

use App\Http\Controllers\Controller;
use App\Domains\Driver\Models\Driver;
use App\Domains\Driver\Services\DriverService;

/**
 * Class DeletedDriverController.
 */
class DeletedDriverController extends Controller
{
    /**
     * @var DriverService
     */
    protected $driverService;

    /**
     * DeletedDriverController constructor.
     *
     * @param  DriverService  $driverService
     */
    public function __construct(DriverService $driverService)
    {
        $this->driverService = $driverService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.driver.deleted');
    }

    /**
     * @param  Driver  $deletedDriver
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Driver $deletedDriver)
    {
        $this->driverService->restore($deletedDriver);

        return redirect()->route('admin.driver.index')->withFlashSuccess(__('The  Drivers was successfully restored.'));
    }

    /**
     * @param  Driver  $deletedDriver
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Driver $deletedDriver)
    {
        $this->driverService->destroy($deletedDriver);

        return redirect()->route('admin.driver.deleted')->withFlashSuccess(__('The  Drivers was permanently deleted.'));
    }
}