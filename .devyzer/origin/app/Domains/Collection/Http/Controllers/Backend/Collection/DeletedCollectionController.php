<?php

namespace App\Domains\Collection\Http\Controllers\Backend\Collection;

use App\Http\Controllers\Controller;
use App\Domains\Collection\Models\Collection;
use App\Domains\Collection\Services\CollectionService;

/**
 * Class DeletedCollectionController.
 */
class DeletedCollectionController extends Controller
{
    /**
     * @var CollectionService
     */
    protected $collectionService;

    /**
     * DeletedCollectionController constructor.
     *
     * @param  CollectionService  $collectionService
     */
    public function __construct(CollectionService $collectionService)
    {
        $this->collectionService = $collectionService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.collection.deleted');
    }

    /**
     * @param  Collection  $deletedCollection
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Collection $deletedCollection)
    {
        $this->collectionService->restore($deletedCollection);

        return redirect()->route('admin.collection.index')->withFlashSuccess(__('The  Collections was successfully restored.'));
    }

    /**
     * @param  Collection  $deletedCollection
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Collection $deletedCollection)
    {
        $this->collectionService->destroy($deletedCollection);

        return redirect()->route('admin.collection.deleted')->withFlashSuccess(__('The  Collections was permanently deleted.'));
    }
}