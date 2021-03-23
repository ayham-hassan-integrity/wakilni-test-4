<?php

namespace App\Domains\TelescopeEntryTag\Http\Controllers\Backend\Telescopeentrytag;

use App\Http\Controllers\Controller;
use App\Domains\TelescopeEntryTag\Models\Telescopeentrytag;
use App\Domains\TelescopeEntryTag\Services\TelescopeentrytagService;

/**
 * Class DeletedTelescopeentrytagController.
 */
class DeletedTelescopeentrytagController extends Controller
{
    /**
     * @var TelescopeentrytagService
     */
    protected $telescopeentrytagService;

    /**
     * DeletedTelescopeentrytagController constructor.
     *
     * @param  TelescopeentrytagService  $telescopeentrytagService
     */
    public function __construct(TelescopeentrytagService $telescopeentrytagService)
    {
        $this->telescopeentrytagService = $telescopeentrytagService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.telescope-entry-tag.deleted');
    }

    /**
     * @param  Telescopeentrytag  $deletedTelescopeentrytag
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Telescopeentrytag $deletedTelescopeentrytag)
    {
        $this->telescopeentrytagService->restore($deletedTelescopeentrytag);

        return redirect()->route('admin.telescopeentrytag.index')->withFlashSuccess(__('The  Telescopeentrytags was successfully restored.'));
    }

    /**
     * @param  Telescopeentrytag  $deletedTelescopeentrytag
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Telescopeentrytag $deletedTelescopeentrytag)
    {
        $this->telescopeentrytagService->destroy($deletedTelescopeentrytag);

        return redirect()->route('admin.telescopeentrytag.deleted')->withFlashSuccess(__('The  Telescopeentrytags was permanently deleted.'));
    }
}