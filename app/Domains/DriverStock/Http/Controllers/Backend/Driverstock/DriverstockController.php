<?php

namespace App\Domains\DriverStock\Http\Controllers\Backend\Driverstock;

use App\Http\Controllers\Controller;
use App\Domains\DriverStock\Models\Driverstock;
use App\Domains\DriverStock\Services\DriverstockService;
use App\Domains\DriverStock\Http\Requests\Backend\Driverstock\DeleteDriverstockRequest;
use App\Domains\DriverStock\Http\Requests\Backend\Driverstock\EditDriverstockRequest;
use App\Domains\DriverStock\Http\Requests\Backend\Driverstock\StoreDriverstockRequest;
use App\Domains\DriverStock\Http\Requests\Backend\Driverstock\UpdateDriverstockRequest;

/**
 * Class DriverstockController.
 */
class DriverstockController extends Controller
{
    /**
     * @var DriverstockService
     */
    protected $driverstockService;

    /**
     * DriverstockController constructor.
     *
     * @param DriverstockService $driverstockService
     */
    public function __construct(DriverstockService $driverstockService)
    {
        $this->driverstockService = $driverstockService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.driver-stock.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.driver-stock.create');
    }

    /**
     * @param StoreDriverstockRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreDriverstockRequest $request)
    {
        $driverstock = $this->driverstockService->store($request->validated());

        return redirect()->route('admin.driverstock.show', $driverstock)->withFlashSuccess(__('The  Driverstocks was successfully created.'));
    }

    /**
     * @param Driverstock $driverstock
     *
     * @return mixed
     */
    public function show(Driverstock $driverstock)
    {
        return view('backend.driver-stock.show')
            ->withDriverstock($driverstock);
    }

    /**
     * @param EditDriverstockRequest $request
     * @param Driverstock $driverstock
     *
     * @return mixed
     */
    public function edit(EditDriverstockRequest $request, Driverstock $driverstock)
    {
        return view('backend.driver-stock.edit')
            ->withDriverstock($driverstock);
    }

    /**
     * @param UpdateDriverstockRequest $request
     * @param Driverstock $driverstock
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateDriverstockRequest $request, Driverstock $driverstock)
    {
        $this->driverstockService->update($driverstock, $request->validated());

        return redirect()->route('admin.driverstock.show', $driverstock)->withFlashSuccess(__('The  Driverstocks was successfully updated.'));
    }

    /**
     * @param DeleteDriverstockRequest $request
     * @param Driverstock $driverstock
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteDriverstockRequest $request, Driverstock $driverstock)
    {
        $this->driverstockService->delete($driverstock);

        return redirect()->route('admin.$driverstock.deleted')->withFlashSuccess(__('The  Driverstocks was successfully deleted.'));
    }
}