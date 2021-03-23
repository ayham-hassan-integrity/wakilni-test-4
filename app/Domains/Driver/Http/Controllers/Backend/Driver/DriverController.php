<?php

namespace App\Domains\Driver\Http\Controllers\Backend\Driver;

use App\Http\Controllers\Controller;
use App\Domains\Driver\Models\Driver;
use App\Domains\Driver\Services\DriverService;
use App\Domains\Driver\Http\Requests\Backend\Driver\DeleteDriverRequest;
use App\Domains\Driver\Http\Requests\Backend\Driver\EditDriverRequest;
use App\Domains\Driver\Http\Requests\Backend\Driver\StoreDriverRequest;
use App\Domains\Driver\Http\Requests\Backend\Driver\UpdateDriverRequest;

/**
 * Class DriverController.
 */
class DriverController extends Controller
{
    /**
     * @var DriverService
     */
    protected $driverService;

    /**
     * DriverController constructor.
     *
     * @param DriverService $driverService
     */
    public function __construct(DriverService $driverService)
    {
        $this->driverService = $driverService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.driver.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.driver.create');
    }

    /**
     * @param StoreDriverRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreDriverRequest $request)
    {
        $driver = $this->driverService->store($request->validated());

        return redirect()->route('admin.driver.show', $driver)->withFlashSuccess(__('The  Drivers was successfully created.'));
    }

    /**
     * @param Driver $driver
     *
     * @return mixed
     */
    public function show(Driver $driver)
    {
        return view('backend.driver.show')
            ->withDriver($driver);
    }

    /**
     * @param EditDriverRequest $request
     * @param Driver $driver
     *
     * @return mixed
     */
    public function edit(EditDriverRequest $request, Driver $driver)
    {
        return view('backend.driver.edit')
            ->withDriver($driver);
    }

    /**
     * @param UpdateDriverRequest $request
     * @param Driver $driver
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateDriverRequest $request, Driver $driver)
    {
        $this->driverService->update($driver, $request->validated());

        return redirect()->route('admin.driver.show', $driver)->withFlashSuccess(__('The  Drivers was successfully updated.'));
    }

    /**
     * @param DeleteDriverRequest $request
     * @param Driver $driver
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteDriverRequest $request, Driver $driver)
    {
        $this->driverService->delete($driver);

        return redirect()->route('admin.$driver.deleted')->withFlashSuccess(__('The  Drivers was successfully deleted.'));
    }
}