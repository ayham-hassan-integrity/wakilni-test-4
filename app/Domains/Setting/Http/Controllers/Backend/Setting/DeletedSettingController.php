<?php

namespace App\Domains\Setting\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use App\Domains\Setting\Models\Setting;
use App\Domains\Setting\Services\SettingService;

/**
 * Class DeletedSettingController.
 */
class DeletedSettingController extends Controller
{
    /**
     * @var SettingService
     */
    protected $settingService;

    /**
     * DeletedSettingController constructor.
     *
     * @param  SettingService  $settingService
     */
    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.setting.deleted');
    }

    /**
     * @param  Setting  $deletedSetting
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Setting $deletedSetting)
    {
        $this->settingService->restore($deletedSetting);

        return redirect()->route('admin.setting.index')->withFlashSuccess(__('The  Settings was successfully restored.'));
    }

    /**
     * @param  Setting  $deletedSetting
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Setting $deletedSetting)
    {
        $this->settingService->destroy($deletedSetting);

        return redirect()->route('admin.setting.deleted')->withFlashSuccess(__('The  Settings was permanently deleted.'));
    }
}