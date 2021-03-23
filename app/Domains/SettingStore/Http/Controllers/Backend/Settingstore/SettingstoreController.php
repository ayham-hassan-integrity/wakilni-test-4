<?php

namespace App\Domains\SettingStore\Http\Controllers\Backend\Settingstore;

use App\Http\Controllers\Controller;
use App\Domains\SettingStore\Models\Settingstore;
use App\Domains\SettingStore\Services\SettingstoreService;
use App\Domains\SettingStore\Http\Requests\Backend\Settingstore\DeleteSettingstoreRequest;
use App\Domains\SettingStore\Http\Requests\Backend\Settingstore\EditSettingstoreRequest;
use App\Domains\SettingStore\Http\Requests\Backend\Settingstore\StoreSettingstoreRequest;
use App\Domains\SettingStore\Http\Requests\Backend\Settingstore\UpdateSettingstoreRequest;

/**
 * Class SettingstoreController.
 */
class SettingstoreController extends Controller
{
    /**
     * @var SettingstoreService
     */
    protected $settingstoreService;

    /**
     * SettingstoreController constructor.
     *
     * @param SettingstoreService $settingstoreService
     */
    public function __construct(SettingstoreService $settingstoreService)
    {
        $this->settingstoreService = $settingstoreService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.setting-store.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.setting-store.create');
    }

    /**
     * @param StoreSettingstoreRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreSettingstoreRequest $request)
    {
        $settingstore = $this->settingstoreService->store($request->validated());

        return redirect()->route('admin.settingstore.show', $settingstore)->withFlashSuccess(__('The  Settingstores was successfully created.'));
    }

    /**
     * @param Settingstore $settingstore
     *
     * @return mixed
     */
    public function show(Settingstore $settingstore)
    {
        return view('backend.setting-store.show')
            ->withSettingstore($settingstore);
    }

    /**
     * @param EditSettingstoreRequest $request
     * @param Settingstore $settingstore
     *
     * @return mixed
     */
    public function edit(EditSettingstoreRequest $request, Settingstore $settingstore)
    {
        return view('backend.setting-store.edit')
            ->withSettingstore($settingstore);
    }

    /**
     * @param UpdateSettingstoreRequest $request
     * @param Settingstore $settingstore
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateSettingstoreRequest $request, Settingstore $settingstore)
    {
        $this->settingstoreService->update($settingstore, $request->validated());

        return redirect()->route('admin.settingstore.show', $settingstore)->withFlashSuccess(__('The  Settingstores was successfully updated.'));
    }

    /**
     * @param DeleteSettingstoreRequest $request
     * @param Settingstore $settingstore
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteSettingstoreRequest $request, Settingstore $settingstore)
    {
        $this->settingstoreService->delete($settingstore);

        return redirect()->route('admin.$settingstore.deleted')->withFlashSuccess(__('The  Settingstores was successfully deleted.'));
    }
}