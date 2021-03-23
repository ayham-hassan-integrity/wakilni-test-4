<?php

namespace App\Domains\Setting\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use App\Domains\Setting\Models\Setting;
use App\Domains\Setting\Services\SettingService;
use App\Domains\Setting\Http\Requests\Backend\Setting\DeleteSettingRequest;
use App\Domains\Setting\Http\Requests\Backend\Setting\EditSettingRequest;
use App\Domains\Setting\Http\Requests\Backend\Setting\StoreSettingRequest;
use App\Domains\Setting\Http\Requests\Backend\Setting\UpdateSettingRequest;

/**
 * Class SettingController.
 */
class SettingController extends Controller
{
    /**
     * @var SettingService
     */
    protected $settingService;

    /**
     * SettingController constructor.
     *
     * @param SettingService $settingService
     */
    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.setting.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.setting.create');
    }

    /**
     * @param StoreSettingRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreSettingRequest $request)
    {
        $setting = $this->settingService->store($request->validated());

        return redirect()->route('admin.setting.show', $setting)->withFlashSuccess(__('The  Settings was successfully created.'));
    }

    /**
     * @param Setting $setting
     *
     * @return mixed
     */
    public function show(Setting $setting)
    {
        return view('backend.setting.show')
            ->withSetting($setting);
    }

    /**
     * @param EditSettingRequest $request
     * @param Setting $setting
     *
     * @return mixed
     */
    public function edit(EditSettingRequest $request, Setting $setting)
    {
        return view('backend.setting.edit')
            ->withSetting($setting);
    }

    /**
     * @param UpdateSettingRequest $request
     * @param Setting $setting
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $this->settingService->update($setting, $request->validated());

        return redirect()->route('admin.setting.show', $setting)->withFlashSuccess(__('The  Settings was successfully updated.'));
    }

    /**
     * @param DeleteSettingRequest $request
     * @param Setting $setting
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteSettingRequest $request, Setting $setting)
    {
        $this->settingService->delete($setting);

        return redirect()->route('admin.$setting.deleted')->withFlashSuccess(__('The  Settings was successfully deleted.'));
    }
}