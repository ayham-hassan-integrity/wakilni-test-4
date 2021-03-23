<?php

namespace App\Domains\TelescopeEntryTag\Http\Controllers\Backend\Telescopeentrytag;

use App\Http\Controllers\Controller;
use App\Domains\TelescopeEntryTag\Models\Telescopeentrytag;
use App\Domains\TelescopeEntryTag\Services\TelescopeentrytagService;
use App\Domains\TelescopeEntryTag\Http\Requests\Backend\Telescopeentrytag\DeleteTelescopeentrytagRequest;
use App\Domains\TelescopeEntryTag\Http\Requests\Backend\Telescopeentrytag\EditTelescopeentrytagRequest;
use App\Domains\TelescopeEntryTag\Http\Requests\Backend\Telescopeentrytag\StoreTelescopeentrytagRequest;
use App\Domains\TelescopeEntryTag\Http\Requests\Backend\Telescopeentrytag\UpdateTelescopeentrytagRequest;

/**
 * Class TelescopeentrytagController.
 */
class TelescopeentrytagController extends Controller
{
    /**
     * @var TelescopeentrytagService
     */
    protected $telescopeentrytagService;

    /**
     * TelescopeentrytagController constructor.
     *
     * @param TelescopeentrytagService $telescopeentrytagService
     */
    public function __construct(TelescopeentrytagService $telescopeentrytagService)
    {
        $this->telescopeentrytagService = $telescopeentrytagService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.telescope-entry-tag.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.telescope-entry-tag.create');
    }

    /**
     * @param StoreTelescopeentrytagRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreTelescopeentrytagRequest $request)
    {
        $telescopeentrytag = $this->telescopeentrytagService->store($request->validated());

        return redirect()->route('admin.telescopeentrytag.show', $telescopeentrytag)->withFlashSuccess(__('The  Telescopeentrytags was successfully created.'));
    }

    /**
     * @param Telescopeentrytag $telescopeentrytag
     *
     * @return mixed
     */
    public function show(Telescopeentrytag $telescopeentrytag)
    {
        return view('backend.telescope-entry-tag.show')
            ->withTelescopeentrytag($telescopeentrytag);
    }

    /**
     * @param EditTelescopeentrytagRequest $request
     * @param Telescopeentrytag $telescopeentrytag
     *
     * @return mixed
     */
    public function edit(EditTelescopeentrytagRequest $request, Telescopeentrytag $telescopeentrytag)
    {
        return view('backend.telescope-entry-tag.edit')
            ->withTelescopeentrytag($telescopeentrytag);
    }

    /**
     * @param UpdateTelescopeentrytagRequest $request
     * @param Telescopeentrytag $telescopeentrytag
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateTelescopeentrytagRequest $request, Telescopeentrytag $telescopeentrytag)
    {
        $this->telescopeentrytagService->update($telescopeentrytag, $request->validated());

        return redirect()->route('admin.telescopeentrytag.show', $telescopeentrytag)->withFlashSuccess(__('The  Telescopeentrytags was successfully updated.'));
    }

    /**
     * @param DeleteTelescopeentrytagRequest $request
     * @param Telescopeentrytag $telescopeentrytag
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteTelescopeentrytagRequest $request, Telescopeentrytag $telescopeentrytag)
    {
        $this->telescopeentrytagService->delete($telescopeentrytag);

        return redirect()->route('admin.$telescopeentrytag.deleted')->withFlashSuccess(__('The  Telescopeentrytags was successfully deleted.'));
    }
}