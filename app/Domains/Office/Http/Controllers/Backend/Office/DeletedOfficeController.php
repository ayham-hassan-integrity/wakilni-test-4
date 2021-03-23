<?php

namespace App\Domains\Office\Http\Controllers\Backend\Office;

use App\Http\Controllers\Controller;
use App\Domains\Office\Models\Office;
use App\Domains\Office\Services\OfficeService;

/**
 * Class DeletedOfficeController.
 */
class DeletedOfficeController extends Controller
{
    /**
     * @var OfficeService
     */
    protected $officeService;

    /**
     * DeletedOfficeController constructor.
     *
     * @param  OfficeService  $officeService
     */
    public function __construct(OfficeService $officeService)
    {
        $this->officeService = $officeService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.office.deleted');
    }

    /**
     * @param  Office  $deletedOffice
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Office $deletedOffice)
    {
        $this->officeService->restore($deletedOffice);

        return redirect()->route('admin.office.index')->withFlashSuccess(__('The  Offices was successfully restored.'));
    }

    /**
     * @param  Office  $deletedOffice
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Office $deletedOffice)
    {
        $this->officeService->destroy($deletedOffice);

        return redirect()->route('admin.office.deleted')->withFlashSuccess(__('The  Offices was permanently deleted.'));
    }
}