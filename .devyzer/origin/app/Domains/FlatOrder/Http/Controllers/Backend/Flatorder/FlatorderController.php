<?php

namespace App\Domains\FlatOrder\Http\Controllers\Backend\Flatorder;

use App\Http\Controllers\Controller;
use App\Domains\FlatOrder\Models\Flatorder;
use App\Domains\FlatOrder\Services\FlatorderService;
use App\Domains\FlatOrder\Http\Requests\Backend\Flatorder\DeleteFlatorderRequest;
use App\Domains\FlatOrder\Http\Requests\Backend\Flatorder\EditFlatorderRequest;
use App\Domains\FlatOrder\Http\Requests\Backend\Flatorder\StoreFlatorderRequest;
use App\Domains\FlatOrder\Http\Requests\Backend\Flatorder\UpdateFlatorderRequest;

/**
 * Class FlatorderController.
 */
class FlatorderController extends Controller
{
    /**
     * @var FlatorderService
     */
    protected $flatorderService;

    /**
     * FlatorderController constructor.
     *
     * @param FlatorderService $flatorderService
     */
    public function __construct(FlatorderService $flatorderService)
    {
        $this->flatorderService = $flatorderService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.flat-order.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.flat-order.create');
    }

    /**
     * @param StoreFlatorderRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreFlatorderRequest $request)
    {
        $flatorder = $this->flatorderService->store($request->validated());

        return redirect()->route('admin.flatorder.show', $flatorder)->withFlashSuccess(__('The  Flatorders was successfully created.'));
    }

    /**
     * @param Flatorder $flatorder
     *
     * @return mixed
     */
    public function show(Flatorder $flatorder)
    {
        return view('backend.flat-order.show')
            ->withFlatorder($flatorder);
    }

    /**
     * @param EditFlatorderRequest $request
     * @param Flatorder $flatorder
     *
     * @return mixed
     */
    public function edit(EditFlatorderRequest $request, Flatorder $flatorder)
    {
        return view('backend.flat-order.edit')
            ->withFlatorder($flatorder);
    }

    /**
     * @param UpdateFlatorderRequest $request
     * @param Flatorder $flatorder
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateFlatorderRequest $request, Flatorder $flatorder)
    {
        $this->flatorderService->update($flatorder, $request->validated());

        return redirect()->route('admin.flatorder.show', $flatorder)->withFlashSuccess(__('The  Flatorders was successfully updated.'));
    }

    /**
     * @param DeleteFlatorderRequest $request
     * @param Flatorder $flatorder
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteFlatorderRequest $request, Flatorder $flatorder)
    {
        $this->flatorderService->delete($flatorder);

        return redirect()->route('admin.$flatorder.deleted')->withFlashSuccess(__('The  Flatorders was successfully deleted.'));
    }
}