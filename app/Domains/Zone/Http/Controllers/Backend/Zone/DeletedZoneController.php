<?php

namespace App\Domains\Zone\Http\Controllers\Backend\Zone;

use App\Http\Controllers\Controller;
use App\Domains\Zone\Models\Zone;
use App\Domains\Zone\Services\ZoneService;

/**
 * Class DeletedZoneController.
 */
class DeletedZoneController extends Controller
{
    /**
     * @var ZoneService
     */
    protected $zoneService;

    /**
     * DeletedZoneController constructor.
     *
     * @param  ZoneService  $zoneService
     */
    public function __construct(ZoneService $zoneService)
    {
        $this->zoneService = $zoneService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.zone.deleted');
    }

    /**
     * @param  Zone  $deletedZone
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Zone $deletedZone)
    {
        $this->zoneService->restore($deletedZone);

        return redirect()->route('admin.zone.index')->withFlashSuccess(__('The  Zones was successfully restored.'));
    }

    /**
     * @param  Zone  $deletedZone
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Zone $deletedZone)
    {
        $this->zoneService->destroy($deletedZone);

        return redirect()->route('admin.zone.deleted')->withFlashSuccess(__('The  Zones was permanently deleted.'));
    }
}