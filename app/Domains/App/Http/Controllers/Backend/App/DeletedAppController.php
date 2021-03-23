<?php

namespace App\Domains\App\Http\Controllers\Backend\App;

use App\Http\Controllers\Controller;
use App\Domains\App\Models\App;
use App\Domains\App\Services\AppService;

/**
 * Class DeletedAppController.
 */
class DeletedAppController extends Controller
{
    /**
     * @var AppService
     */
    protected $appService;

    /**
     * DeletedAppController constructor.
     *
     * @param  AppService  $appService
     */
    public function __construct(AppService $appService)
    {
        $this->appService = $appService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.app.deleted');
    }

    /**
     * @param  App  $deletedApp
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(App $deletedApp)
    {
        $this->appService->restore($deletedApp);

        return redirect()->route('admin.app.index')->withFlashSuccess(__('The  Apps was successfully restored.'));
    }

    /**
     * @param  App  $deletedApp
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(App $deletedApp)
    {
        $this->appService->destroy($deletedApp);

        return redirect()->route('admin.app.deleted')->withFlashSuccess(__('The  Apps was permanently deleted.'));
    }
}