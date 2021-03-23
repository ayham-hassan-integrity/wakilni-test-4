<?php

namespace App\Domains\TimeZone\Http\Controllers\Backend\Timezone;

use App\Http\Controllers\Controller;
use App\Domains\TimeZone\Models\Timezone;
use App\Domains\TimeZone\Services\TimezoneService;
use App\Domains\TimeZone\Http\Requests\Backend\Timezone\DeleteTimezoneRequest;
use App\Domains\TimeZone\Http\Requests\Backend\Timezone\EditTimezoneRequest;
use App\Domains\TimeZone\Http\Requests\Backend\Timezone\StoreTimezoneRequest;
use App\Domains\TimeZone\Http\Requests\Backend\Timezone\UpdateTimezoneRequest;

/**
 * Class TimezoneController.
 */
class TimezoneController extends Controller
{
    /**
     * @var TimezoneService
     */
    protected $timezoneService;

    /**
     * TimezoneController constructor.
     *
     * @param TimezoneService $timezoneService
     */
    public function __construct(TimezoneService $timezoneService)
    {
        $this->timezoneService = $timezoneService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.time-zone.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.time-zone.create');
    }

    /**
     * @param StoreTimezoneRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreTimezoneRequest $request)
    {
        $timezone = $this->timezoneService->store($request->validated());

        return redirect()->route('admin.timezone.show', $timezone)->withFlashSuccess(__('The  Timezones was successfully created.'));
    }

    /**
     * @param Timezone $timezone
     *
     * @return mixed
     */
    public function show(Timezone $timezone)
    {
        return view('backend.time-zone.show')
            ->withTimezone($timezone);
    }

    /**
     * @param EditTimezoneRequest $request
     * @param Timezone $timezone
     *
     * @return mixed
     */
    public function edit(EditTimezoneRequest $request, Timezone $timezone)
    {
        return view('backend.time-zone.edit')
            ->withTimezone($timezone);
    }

    /**
     * @param UpdateTimezoneRequest $request
     * @param Timezone $timezone
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateTimezoneRequest $request, Timezone $timezone)
    {
        $this->timezoneService->update($timezone, $request->validated());

        return redirect()->route('admin.timezone.show', $timezone)->withFlashSuccess(__('The  Timezones was successfully updated.'));
    }

    /**
     * @param DeleteTimezoneRequest $request
     * @param Timezone $timezone
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteTimezoneRequest $request, Timezone $timezone)
    {
        $this->timezoneService->delete($timezone);

        return redirect()->route('admin.$timezone.deleted')->withFlashSuccess(__('The  Timezones was successfully deleted.'));
    }
}