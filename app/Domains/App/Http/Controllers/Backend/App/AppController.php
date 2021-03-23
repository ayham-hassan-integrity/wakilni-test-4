<?php

namespace App\Domains\App\Http\Controllers\Backend\App;

use App\Http\Controllers\Controller;
use App\Domains\App\Models\App;
use App\Domains\App\Services\AppService;
use App\Domains\App\Http\Requests\Backend\App\DeleteAppRequest;
use App\Domains\App\Http\Requests\Backend\App\EditAppRequest;
use App\Domains\App\Http\Requests\Backend\App\StoreAppRequest;
use App\Domains\App\Http\Requests\Backend\App\UpdateAppRequest;

/**
 * Class AppController.
 */
class AppController extends Controller
{
    /**
     * @var AppService
     */
    protected $appService;

    /**
     * AppController constructor.
     *
     * @param AppService $appService
     */
    public function __construct(AppService $appService)
    {
        $this->appService = $appService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.app.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.app.create');
    }

    /**
     * @param StoreAppRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreAppRequest $request)
    {
        $app = $this->appService->store($request->validated());

        return redirect()->route('admin.app.show', $app)->withFlashSuccess(__('The  Apps was successfully created.'));
    }

    /**
     * @param App $app
     *
     * @return mixed
     */
    public function show(App $app)
    {
        return view('backend.app.show')
            ->withApp($app);
    }

    /**
     * @param EditAppRequest $request
     * @param App $app
     *
     * @return mixed
     */
    public function edit(EditAppRequest $request, App $app)
    {
        return view('backend.app.edit')
            ->withApp($app);
    }

    /**
     * @param UpdateAppRequest $request
     * @param App $app
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateAppRequest $request, App $app)
    {
        $this->appService->update($app, $request->validated());

        return redirect()->route('admin.app.show', $app)->withFlashSuccess(__('The  Apps was successfully updated.'));
    }

    /**
     * @param DeleteAppRequest $request
     * @param App $app
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteAppRequest $request, App $app)
    {
        $this->appService->delete($app);

        return redirect()->route('admin.$app.deleted')->withFlashSuccess(__('The  Apps was successfully deleted.'));
    }
}