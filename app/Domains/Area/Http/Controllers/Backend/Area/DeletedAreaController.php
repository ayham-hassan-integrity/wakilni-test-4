<?php

namespace App\Domains\Area\Http\Controllers\Backend\Area;

use App\Http\Controllers\Controller;
use App\Domains\Area\Models\Area;
use App\Domains\Area\Services\AreaService;

/**
 * Class DeletedAreaController.
 */
class DeletedAreaController extends Controller
{
    /**
     * @var AreaService
     */
    protected $areaService;

    /**
     * DeletedAreaController constructor.
     *
     * @param  AreaService  $areaService
     */
    public function __construct(AreaService $areaService)
    {
        $this->areaService = $areaService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.area.deleted');
    }

    /**
     * @param  Area  $deletedArea
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Area $deletedArea)
    {
        $this->areaService->restore($deletedArea);

        return redirect()->route('admin.area.index')->withFlashSuccess(__('The  Areas was successfully restored.'));
    }

    /**
     * @param  Area  $deletedArea
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Area $deletedArea)
    {
        $this->areaService->destroy($deletedArea);

        return redirect()->route('admin.area.deleted')->withFlashSuccess(__('The  Areas was permanently deleted.'));
    }
}