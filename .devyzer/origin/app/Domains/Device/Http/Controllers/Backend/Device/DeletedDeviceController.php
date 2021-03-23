<?php

namespace App\Domains\Device\Http\Controllers\Backend\Device;

use App\Http\Controllers\Controller;
use App\Domains\Device\Models\Device;
use App\Domains\Device\Services\DeviceService;

/**
 * Class DeletedDeviceController.
 */
class DeletedDeviceController extends Controller
{
    /**
     * @var DeviceService
     */
    protected $deviceService;

    /**
     * DeletedDeviceController constructor.
     *
     * @param  DeviceService  $deviceService
     */
    public function __construct(DeviceService $deviceService)
    {
        $this->deviceService = $deviceService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.device.deleted');
    }

    /**
     * @param  Device  $deletedDevice
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Device $deletedDevice)
    {
        $this->deviceService->restore($deletedDevice);

        return redirect()->route('admin.device.index')->withFlashSuccess(__('The  Devices was successfully restored.'));
    }

    /**
     * @param  Device  $deletedDevice
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Device $deletedDevice)
    {
        $this->deviceService->destroy($deletedDevice);

        return redirect()->route('admin.device.deleted')->withFlashSuccess(__('The  Devices was permanently deleted.'));
    }
}