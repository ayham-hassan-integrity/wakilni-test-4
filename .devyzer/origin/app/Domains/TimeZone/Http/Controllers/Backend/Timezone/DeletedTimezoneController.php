<?php

namespace App\Domains\TimeZone\Http\Controllers\Backend\Timezone;

use App\Http\Controllers\Controller;
use App\Domains\TimeZone\Models\Timezone;
use App\Domains\TimeZone\Services\TimezoneService;

/**
 * Class DeletedTimezoneController.
 */
class DeletedTimezoneController extends Controller
{
    /**
     * @var TimezoneService
     */
    protected $timezoneService;

    /**
     * DeletedTimezoneController constructor.
     *
     * @param  TimezoneService  $timezoneService
     */
    public function __construct(TimezoneService $timezoneService)
    {
        $this->timezoneService = $timezoneService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.time-zone.deleted');
    }

    /**
     * @param  Timezone  $deletedTimezone
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Timezone $deletedTimezone)
    {
        $this->timezoneService->restore($deletedTimezone);

        return redirect()->route('admin.timezone.index')->withFlashSuccess(__('The  Timezones was successfully restored.'));
    }

    /**
     * @param  Timezone  $deletedTimezone
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Timezone $deletedTimezone)
    {
        $this->timezoneService->destroy($deletedTimezone);

        return redirect()->route('admin.timezone.deleted')->withFlashSuccess(__('The  Timezones was permanently deleted.'));
    }
}