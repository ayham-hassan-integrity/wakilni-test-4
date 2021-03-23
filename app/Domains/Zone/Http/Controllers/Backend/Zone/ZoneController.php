<?php

namespace App\Domains\Zone\Http\Controllers\Backend\Zone;

use App\Http\Controllers\Controller;
use App\Domains\Zone\Models\Zone;
use App\Domains\Zone\Services\ZoneService;
use App\Domains\Zone\Http\Requests\Backend\Zone\DeleteZoneRequest;
use App\Domains\Zone\Http\Requests\Backend\Zone\EditZoneRequest;
use App\Domains\Zone\Http\Requests\Backend\Zone\StoreZoneRequest;
use App\Domains\Zone\Http\Requests\Backend\Zone\UpdateZoneRequest;

/**
 * Class ZoneController.
 */
class ZoneController extends Controller
{
    /**
     * @var ZoneService
     */
    protected $zoneService;

    /**
     * ZoneController constructor.
     *
     * @param ZoneService $zoneService
     */
    public function __construct(ZoneService $zoneService)
    {
        $this->zoneService = $zoneService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.zone.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.zone.create');
    }

    /**
     * @param StoreZoneRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreZoneRequest $request)
    {
        $zone = $this->zoneService->store($request->validated());

        return redirect()->route('admin.zone.show', $zone)->withFlashSuccess(__('The  Zones was successfully created.'));
    }

    /**
     * @param Zone $zone
     *
     * @return mixed
     */
    public function show(Zone $zone)
    {
        return view('backend.zone.show')
            ->withZone($zone);
    }

    /**
     * @param EditZoneRequest $request
     * @param Zone $zone
     *
     * @return mixed
     */
    public function edit(EditZoneRequest $request, Zone $zone)
    {
        return view('backend.zone.edit')
            ->withZone($zone);
    }

    /**
     * @param UpdateZoneRequest $request
     * @param Zone $zone
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateZoneRequest $request, Zone $zone)
    {
        $this->zoneService->update($zone, $request->validated());

        return redirect()->route('admin.zone.show', $zone)->withFlashSuccess(__('The  Zones was successfully updated.'));
    }

    /**
     * @param DeleteZoneRequest $request
     * @param Zone $zone
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteZoneRequest $request, Zone $zone)
    {
        $this->zoneService->delete($zone);

        return redirect()->route('admin.$zone.deleted')->withFlashSuccess(__('The  Zones was successfully deleted.'));
    }
}