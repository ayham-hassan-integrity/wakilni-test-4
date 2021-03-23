<?php

namespace App\Domains\Office\Http\Controllers\Backend\Office;

use App\Http\Controllers\Controller;
use App\Domains\Office\Models\Office;
use App\Domains\Office\Services\OfficeService;
use App\Domains\Office\Http\Requests\Backend\Office\DeleteOfficeRequest;
use App\Domains\Office\Http\Requests\Backend\Office\EditOfficeRequest;
use App\Domains\Office\Http\Requests\Backend\Office\StoreOfficeRequest;
use App\Domains\Office\Http\Requests\Backend\Office\UpdateOfficeRequest;

/**
 * Class OfficeController.
 */
class OfficeController extends Controller
{
    /**
     * @var OfficeService
     */
    protected $officeService;

    /**
     * OfficeController constructor.
     *
     * @param OfficeService $officeService
     */
    public function __construct(OfficeService $officeService)
    {
        $this->officeService = $officeService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.office.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.office.create');
    }

    /**
     * @param StoreOfficeRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreOfficeRequest $request)
    {
        $office = $this->officeService->store($request->validated());

        return redirect()->route('admin.office.show', $office)->withFlashSuccess(__('The  Offices was successfully created.'));
    }

    /**
     * @param Office $office
     *
     * @return mixed
     */
    public function show(Office $office)
    {
        return view('backend.office.show')
            ->withOffice($office);
    }

    /**
     * @param EditOfficeRequest $request
     * @param Office $office
     *
     * @return mixed
     */
    public function edit(EditOfficeRequest $request, Office $office)
    {
        return view('backend.office.edit')
            ->withOffice($office);
    }

    /**
     * @param UpdateOfficeRequest $request
     * @param Office $office
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateOfficeRequest $request, Office $office)
    {
        $this->officeService->update($office, $request->validated());

        return redirect()->route('admin.office.show', $office)->withFlashSuccess(__('The  Offices was successfully updated.'));
    }

    /**
     * @param DeleteOfficeRequest $request
     * @param Office $office
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteOfficeRequest $request, Office $office)
    {
        $this->officeService->delete($office);

        return redirect()->route('admin.$office.deleted')->withFlashSuccess(__('The  Offices was successfully deleted.'));
    }
}