<?php

namespace App\Domains\Area\Http\Controllers\Backend\Area;

use App\Http\Controllers\Controller;
use App\Domains\Area\Models\Area;
use App\Domains\Area\Services\AreaService;
use App\Domains\Area\Http\Requests\Backend\Area\DeleteAreaRequest;
use App\Domains\Area\Http\Requests\Backend\Area\EditAreaRequest;
use App\Domains\Area\Http\Requests\Backend\Area\StoreAreaRequest;
use App\Domains\Area\Http\Requests\Backend\Area\UpdateAreaRequest;

/**
 * Class AreaController.
 */
class AreaController extends Controller
{
    /**
     * @var AreaService
     */
    protected $areaService;

    /**
     * AreaController constructor.
     *
     * @param AreaService $areaService
     */
    public function __construct(AreaService $areaService)
    {
        $this->areaService = $areaService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.area.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.area.create');
    }

    /**
     * @param StoreAreaRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreAreaRequest $request)
    {
        $area = $this->areaService->store($request->validated());

        return redirect()->route('admin.area.show', $area)->withFlashSuccess(__('The  Areas was successfully created.'));
    }

    /**
     * @param Area $area
     *
     * @return mixed
     */
    public function show(Area $area)
    {
        return view('backend.area.show')
            ->withArea($area);
    }

    /**
     * @param EditAreaRequest $request
     * @param Area $area
     *
     * @return mixed
     */
    public function edit(EditAreaRequest $request, Area $area)
    {
        return view('backend.area.edit')
            ->withArea($area);
    }

    /**
     * @param UpdateAreaRequest $request
     * @param Area $area
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateAreaRequest $request, Area $area)
    {
        $this->areaService->update($area, $request->validated());

        return redirect()->route('admin.area.show', $area)->withFlashSuccess(__('The  Areas was successfully updated.'));
    }

    /**
     * @param DeleteAreaRequest $request
     * @param Area $area
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteAreaRequest $request, Area $area)
    {
        $this->areaService->delete($area);

        return redirect()->route('admin.$area.deleted')->withFlashSuccess(__('The  Areas was successfully deleted.'));
    }
}