<?php

namespace App\Domains\SettingStore\Http\Controllers\Backend\Settingstore;

use App\Http\Controllers\Controller;
use App\Domains\SettingStore\Models\Settingstore;
use App\Domains\SettingStore\Services\SettingstoreService;

/**
 * Class DeletedSettingstoreController.
 */
class DeletedSettingstoreController extends Controller
{
    /**
     * @var SettingstoreService
     */
    protected $settingstoreService;

    /**
     * DeletedSettingstoreController constructor.
     *
     * @param  SettingstoreService  $settingstoreService
     */
    public function __construct(SettingstoreService $settingstoreService)
    {
        $this->settingstoreService = $settingstoreService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.setting-store.deleted');
    }

    /**
     * @param  Settingstore  $deletedSettingstore
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Settingstore $deletedSettingstore)
    {
        $this->settingstoreService->restore($deletedSettingstore);

        return redirect()->route('admin.settingstore.index')->withFlashSuccess(__('The  Settingstores was successfully restored.'));
    }

    /**
     * @param  Settingstore  $deletedSettingstore
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Settingstore $deletedSettingstore)
    {
        $this->settingstoreService->destroy($deletedSettingstore);

        return redirect()->route('admin.settingstore.deleted')->withFlashSuccess(__('The  Settingstores was permanently deleted.'));
    }
}