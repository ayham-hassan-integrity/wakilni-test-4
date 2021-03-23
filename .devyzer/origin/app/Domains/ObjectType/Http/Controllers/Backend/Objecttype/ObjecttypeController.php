<?php

namespace App\Domains\ObjectType\Http\Controllers\Backend\Objecttype;

use App\Http\Controllers\Controller;
use App\Domains\ObjectType\Models\Objecttype;
use App\Domains\ObjectType\Services\ObjecttypeService;
use App\Domains\ObjectType\Http\Requests\Backend\Objecttype\DeleteObjecttypeRequest;
use App\Domains\ObjectType\Http\Requests\Backend\Objecttype\EditObjecttypeRequest;
use App\Domains\ObjectType\Http\Requests\Backend\Objecttype\StoreObjecttypeRequest;
use App\Domains\ObjectType\Http\Requests\Backend\Objecttype\UpdateObjecttypeRequest;

/**
 * Class ObjecttypeController.
 */
class ObjecttypeController extends Controller
{
    /**
     * @var ObjecttypeService
     */
    protected $objecttypeService;

    /**
     * ObjecttypeController constructor.
     *
     * @param ObjecttypeService $objecttypeService
     */
    public function __construct(ObjecttypeService $objecttypeService)
    {
        $this->objecttypeService = $objecttypeService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.object-type.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.object-type.create');
    }

    /**
     * @param StoreObjecttypeRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreObjecttypeRequest $request)
    {
        $objecttype = $this->objecttypeService->store($request->validated());

        return redirect()->route('admin.objecttype.show', $objecttype)->withFlashSuccess(__('The  Objecttypes was successfully created.'));
    }

    /**
     * @param Objecttype $objecttype
     *
     * @return mixed
     */
    public function show(Objecttype $objecttype)
    {
        return view('backend.object-type.show')
            ->withObjecttype($objecttype);
    }

    /**
     * @param EditObjecttypeRequest $request
     * @param Objecttype $objecttype
     *
     * @return mixed
     */
    public function edit(EditObjecttypeRequest $request, Objecttype $objecttype)
    {
        return view('backend.object-type.edit')
            ->withObjecttype($objecttype);
    }

    /**
     * @param UpdateObjecttypeRequest $request
     * @param Objecttype $objecttype
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateObjecttypeRequest $request, Objecttype $objecttype)
    {
        $this->objecttypeService->update($objecttype, $request->validated());

        return redirect()->route('admin.objecttype.show', $objecttype)->withFlashSuccess(__('The  Objecttypes was successfully updated.'));
    }

    /**
     * @param DeleteObjecttypeRequest $request
     * @param Objecttype $objecttype
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteObjecttypeRequest $request, Objecttype $objecttype)
    {
        $this->objecttypeService->delete($objecttype);

        return redirect()->route('admin.$objecttype.deleted')->withFlashSuccess(__('The  Objecttypes was successfully deleted.'));
    }
}