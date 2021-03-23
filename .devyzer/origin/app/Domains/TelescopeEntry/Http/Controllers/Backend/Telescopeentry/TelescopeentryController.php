<?php

namespace App\Domains\TelescopeEntry\Http\Controllers\Backend\Telescopeentry;

use App\Http\Controllers\Controller;
use App\Domains\TelescopeEntry\Models\Telescopeentry;
use App\Domains\TelescopeEntry\Services\TelescopeentryService;
use App\Domains\TelescopeEntry\Http\Requests\Backend\Telescopeentry\DeleteTelescopeentryRequest;
use App\Domains\TelescopeEntry\Http\Requests\Backend\Telescopeentry\EditTelescopeentryRequest;
use App\Domains\TelescopeEntry\Http\Requests\Backend\Telescopeentry\StoreTelescopeentryRequest;
use App\Domains\TelescopeEntry\Http\Requests\Backend\Telescopeentry\UpdateTelescopeentryRequest;

/**
 * Class TelescopeentryController.
 */
class TelescopeentryController extends Controller
{
    /**
     * @var TelescopeentryService
     */
    protected $telescopeentryService;

    /**
     * TelescopeentryController constructor.
     *
     * @param TelescopeentryService $telescopeentryService
     */
    public function __construct(TelescopeentryService $telescopeentryService)
    {
        $this->telescopeentryService = $telescopeentryService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.telescope-entry.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.telescope-entry.create');
    }

    /**
     * @param StoreTelescopeentryRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreTelescopeentryRequest $request)
    {
        $telescopeentry = $this->telescopeentryService->store($request->validated());

        return redirect()->route('admin.telescopeentry.show', $telescopeentry)->withFlashSuccess(__('The  Telescopeentries was successfully created.'));
    }

    /**
     * @param Telescopeentry $telescopeentry
     *
     * @return mixed
     */
    public function show(Telescopeentry $telescopeentry)
    {
        return view('backend.telescope-entry.show')
            ->withTelescopeentry($telescopeentry);
    }

    /**
     * @param EditTelescopeentryRequest $request
     * @param Telescopeentry $telescopeentry
     *
     * @return mixed
     */
    public function edit(EditTelescopeentryRequest $request, Telescopeentry $telescopeentry)
    {
        return view('backend.telescope-entry.edit')
            ->withTelescopeentry($telescopeentry);
    }

    /**
     * @param UpdateTelescopeentryRequest $request
     * @param Telescopeentry $telescopeentry
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateTelescopeentryRequest $request, Telescopeentry $telescopeentry)
    {
        $this->telescopeentryService->update($telescopeentry, $request->validated());

        return redirect()->route('admin.telescopeentry.show', $telescopeentry)->withFlashSuccess(__('The  Telescopeentries was successfully updated.'));
    }

    /**
     * @param DeleteTelescopeentryRequest $request
     * @param Telescopeentry $telescopeentry
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteTelescopeentryRequest $request, Telescopeentry $telescopeentry)
    {
        $this->telescopeentryService->delete($telescopeentry);

        return redirect()->route('admin.$telescopeentry.deleted')->withFlashSuccess(__('The  Telescopeentries was successfully deleted.'));
    }
}