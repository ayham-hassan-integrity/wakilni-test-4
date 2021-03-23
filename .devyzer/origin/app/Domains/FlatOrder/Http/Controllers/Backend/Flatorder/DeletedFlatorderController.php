<?php

namespace App\Domains\FlatOrder\Http\Controllers\Backend\Flatorder;

use App\Http\Controllers\Controller;
use App\Domains\FlatOrder\Models\Flatorder;
use App\Domains\FlatOrder\Services\FlatorderService;

/**
 * Class DeletedFlatorderController.
 */
class DeletedFlatorderController extends Controller
{
    /**
     * @var FlatorderService
     */
    protected $flatorderService;

    /**
     * DeletedFlatorderController constructor.
     *
     * @param  FlatorderService  $flatorderService
     */
    public function __construct(FlatorderService $flatorderService)
    {
        $this->flatorderService = $flatorderService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.flat-order.deleted');
    }

    /**
     * @param  Flatorder  $deletedFlatorder
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Flatorder $deletedFlatorder)
    {
        $this->flatorderService->restore($deletedFlatorder);

        return redirect()->route('admin.flatorder.index')->withFlashSuccess(__('The  Flatorders was successfully restored.'));
    }

    /**
     * @param  Flatorder  $deletedFlatorder
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Flatorder $deletedFlatorder)
    {
        $this->flatorderService->destroy($deletedFlatorder);

        return redirect()->route('admin.flatorder.deleted')->withFlashSuccess(__('The  Flatorders was permanently deleted.'));
    }
}