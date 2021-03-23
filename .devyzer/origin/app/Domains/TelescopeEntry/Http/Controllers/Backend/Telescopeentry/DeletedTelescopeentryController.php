<?php

namespace App\Domains\TelescopeEntry\Http\Controllers\Backend\Telescopeentry;

use App\Http\Controllers\Controller;
use App\Domains\TelescopeEntry\Models\Telescopeentry;
use App\Domains\TelescopeEntry\Services\TelescopeentryService;

/**
 * Class DeletedTelescopeentryController.
 */
class DeletedTelescopeentryController extends Controller
{
    /**
     * @var TelescopeentryService
     */
    protected $telescopeentryService;

    /**
     * DeletedTelescopeentryController constructor.
     *
     * @param  TelescopeentryService  $telescopeentryService
     */
    public function __construct(TelescopeentryService $telescopeentryService)
    {
        $this->telescopeentryService = $telescopeentryService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.telescope-entry.deleted');
    }

    /**
     * @param  Telescopeentry  $deletedTelescopeentry
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Telescopeentry $deletedTelescopeentry)
    {
        $this->telescopeentryService->restore($deletedTelescopeentry);

        return redirect()->route('admin.telescopeentry.index')->withFlashSuccess(__('The  Telescopeentries was successfully restored.'));
    }

    /**
     * @param  Telescopeentry  $deletedTelescopeentry
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Telescopeentry $deletedTelescopeentry)
    {
        $this->telescopeentryService->destroy($deletedTelescopeentry);

        return redirect()->route('admin.telescopeentry.deleted')->withFlashSuccess(__('The  Telescopeentries was permanently deleted.'));
    }
}