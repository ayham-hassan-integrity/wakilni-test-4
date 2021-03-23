<?php

namespace App\Domains\Collection\Http\Controllers\Backend\Collection;

use App\Http\Controllers\Controller;
use App\Domains\Collection\Models\Collection;
use App\Domains\Collection\Services\CollectionService;
use App\Domains\Collection\Http\Requests\Backend\Collection\DeleteCollectionRequest;
use App\Domains\Collection\Http\Requests\Backend\Collection\EditCollectionRequest;
use App\Domains\Collection\Http\Requests\Backend\Collection\StoreCollectionRequest;
use App\Domains\Collection\Http\Requests\Backend\Collection\UpdateCollectionRequest;

/**
 * Class CollectionController.
 */
class CollectionController extends Controller
{
    /**
     * @var CollectionService
     */
    protected $collectionService;

    /**
     * CollectionController constructor.
     *
     * @param CollectionService $collectionService
     */
    public function __construct(CollectionService $collectionService)
    {
        $this->collectionService = $collectionService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.collection.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.collection.create');
    }

    /**
     * @param StoreCollectionRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreCollectionRequest $request)
    {
        $collection = $this->collectionService->store($request->validated());

        return redirect()->route('admin.collection.show', $collection)->withFlashSuccess(__('The  Collections was successfully created.'));
    }

    /**
     * @param Collection $collection
     *
     * @return mixed
     */
    public function show(Collection $collection)
    {
        return view('backend.collection.show')
            ->withCollection($collection);
    }

    /**
     * @param EditCollectionRequest $request
     * @param Collection $collection
     *
     * @return mixed
     */
    public function edit(EditCollectionRequest $request, Collection $collection)
    {
        return view('backend.collection.edit')
            ->withCollection($collection);
    }

    /**
     * @param UpdateCollectionRequest $request
     * @param Collection $collection
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateCollectionRequest $request, Collection $collection)
    {
        $this->collectionService->update($collection, $request->validated());

        return redirect()->route('admin.collection.show', $collection)->withFlashSuccess(__('The  Collections was successfully updated.'));
    }

    /**
     * @param DeleteCollectionRequest $request
     * @param Collection $collection
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteCollectionRequest $request, Collection $collection)
    {
        $this->collectionService->delete($collection);

        return redirect()->route('admin.$collection.deleted')->withFlashSuccess(__('The  Collections was successfully deleted.'));
    }
}