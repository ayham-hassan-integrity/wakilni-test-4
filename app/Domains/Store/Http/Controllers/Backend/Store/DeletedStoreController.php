<?php

namespace App\Domains\Store\Http\Controllers\Backend\Store;

use App\Http\Controllers\Controller;
use App\Domains\Store\Models\Store;
use App\Domains\Store\Services\StoreService;

/**
 * Class DeletedStoreController.
 */
class DeletedStoreController extends Controller
{
    /**
     * @var StoreService
     */
    protected $storeService;

    /**
     * DeletedStoreController constructor.
     *
     * @param  StoreService  $storeService
     */
    public function __construct(StoreService $storeService)
    {
        $this->storeService = $storeService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.store.deleted');
    }

    /**
     * @param  Store  $deletedStore
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Store $deletedStore)
    {
        $this->storeService->restore($deletedStore);

        return redirect()->route('admin.store.index')->withFlashSuccess(__('The  Stores was successfully restored.'));
    }

    /**
     * @param  Store  $deletedStore
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Store $deletedStore)
    {
        $this->storeService->destroy($deletedStore);

        return redirect()->route('admin.store.deleted')->withFlashSuccess(__('The  Stores was permanently deleted.'));
    }
}