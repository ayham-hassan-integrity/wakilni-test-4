<?php

namespace App\Domains\Store\Http\Controllers\Backend\Store;

use App\Http\Controllers\Controller;
use App\Domains\Store\Models\Store;
use App\Domains\Store\Services\StoreService;
use App\Domains\Store\Http\Requests\Backend\Store\DeleteStoreRequest;
use App\Domains\Store\Http\Requests\Backend\Store\EditStoreRequest;
use App\Domains\Store\Http\Requests\Backend\Store\StoreStoreRequest;
use App\Domains\Store\Http\Requests\Backend\Store\UpdateStoreRequest;

/**
 * Class StoreController.
 */
class StoreController extends Controller
{
    /**
     * @var StoreService
     */
    protected $storeService;

    /**
     * StoreController constructor.
     *
     * @param StoreService $storeService
     */
    public function __construct(StoreService $storeService)
    {
        $this->storeService = $storeService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.store.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.store.create');
    }

    /**
     * @param StoreStoreRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreStoreRequest $request)
    {
        $store = $this->storeService->store($request->validated());

        return redirect()->route('admin.store.show', $store)->withFlashSuccess(__('The  Stores was successfully created.'));
    }

    /**
     * @param Store $store
     *
     * @return mixed
     */
    public function show(Store $store)
    {
        return view('backend.store.show')
            ->withStore($store);
    }

    /**
     * @param EditStoreRequest $request
     * @param Store $store
     *
     * @return mixed
     */
    public function edit(EditStoreRequest $request, Store $store)
    {
        return view('backend.store.edit')
            ->withStore($store);
    }

    /**
     * @param UpdateStoreRequest $request
     * @param Store $store
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateStoreRequest $request, Store $store)
    {
        $this->storeService->update($store, $request->validated());

        return redirect()->route('admin.store.show', $store)->withFlashSuccess(__('The  Stores was successfully updated.'));
    }

    /**
     * @param DeleteStoreRequest $request
     * @param Store $store
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteStoreRequest $request, Store $store)
    {
        $this->storeService->delete($store);

        return redirect()->route('admin.$store.deleted')->withFlashSuccess(__('The  Stores was successfully deleted.'));
    }
}