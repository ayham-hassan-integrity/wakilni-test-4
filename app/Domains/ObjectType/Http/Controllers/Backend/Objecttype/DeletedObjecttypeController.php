<?php

namespace App\Domains\ObjectType\Http\Controllers\Backend\Objecttype;

use App\Http\Controllers\Controller;
use App\Domains\ObjectType\Models\Objecttype;
use App\Domains\ObjectType\Services\ObjecttypeService;

/**
 * Class DeletedObjecttypeController.
 */
class DeletedObjecttypeController extends Controller
{
    /**
     * @var ObjecttypeService
     */
    protected $objecttypeService;

    /**
     * DeletedObjecttypeController constructor.
     *
     * @param  ObjecttypeService  $objecttypeService
     */
    public function __construct(ObjecttypeService $objecttypeService)
    {
        $this->objecttypeService = $objecttypeService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.object-type.deleted');
    }

    /**
     * @param  Objecttype  $deletedObjecttype
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Objecttype $deletedObjecttype)
    {
        $this->objecttypeService->restore($deletedObjecttype);

        return redirect()->route('admin.objecttype.index')->withFlashSuccess(__('The  Objecttypes was successfully restored.'));
    }

    /**
     * @param  Objecttype  $deletedObjecttype
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Objecttype $deletedObjecttype)
    {
        $this->objecttypeService->destroy($deletedObjecttype);

        return redirect()->route('admin.objecttype.deleted')->withFlashSuccess(__('The  Objecttypes was permanently deleted.'));
    }
}