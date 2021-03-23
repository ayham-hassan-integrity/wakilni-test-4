<?php

namespace App\Domains\Device\Http\Controllers\Backend\Device;

use App\Http\Controllers\Controller;
use App\Domains\Device\Models\Device;
use App\Domains\Device\Services\DeviceService;
use App\Domains\Device\Http\Requests\Backend\Device\DeleteDeviceRequest;
use App\Domains\Device\Http\Requests\Backend\Device\EditDeviceRequest;
use App\Domains\Device\Http\Requests\Backend\Device\StoreDeviceRequest;
use App\Domains\Device\Http\Requests\Backend\Device\UpdateDeviceRequest;

/**
 * Class DeviceController.
 */
class DeviceController extends Controller
{
    /**
     * @var DeviceService
     */
    protected $deviceService;

    /**
     * DeviceController constructor.
     *
     * @param DeviceService $deviceService
     */
    public function __construct(DeviceService $deviceService)
    {
        $this->deviceService = $deviceService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.device.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.device.create');
    }

    /**
     * @param StoreDeviceRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreDeviceRequest $request)
    {
        $device = $this->deviceService->store($request->validated());

        return redirect()->route('admin.device.show', $device)->withFlashSuccess(__('The  Devices was successfully created.'));
    }

    /**
     * @param Device $device
     *
     * @return mixed
     */
    public function show(Device $device)
    {
        return view('backend.device.show')
            ->withDevice($device);
    }

    /**
     * @param EditDeviceRequest $request
     * @param Device $device
     *
     * @return mixed
     */
    public function edit(EditDeviceRequest $request, Device $device)
    {
        return view('backend.device.edit')
            ->withDevice($device);
    }

    /**
     * @param UpdateDeviceRequest $request
     * @param Device $device
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateDeviceRequest $request, Device $device)
    {
        $this->deviceService->update($device, $request->validated());

        return redirect()->route('admin.device.show', $device)->withFlashSuccess(__('The  Devices was successfully updated.'));
    }

    /**
     * @param DeleteDeviceRequest $request
     * @param Device $device
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteDeviceRequest $request, Device $device)
    {
        $this->deviceService->delete($device);

        return redirect()->route('admin.$device.deleted')->withFlashSuccess(__('The  Devices was successfully deleted.'));
    }
}