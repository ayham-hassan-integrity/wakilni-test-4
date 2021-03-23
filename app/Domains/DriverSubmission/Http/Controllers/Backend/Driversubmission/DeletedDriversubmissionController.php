<?php

namespace App\Domains\DriverSubmission\Http\Controllers\Backend\Driversubmission;

use App\Http\Controllers\Controller;
use App\Domains\DriverSubmission\Models\Driversubmission;
use App\Domains\DriverSubmission\Services\DriversubmissionService;

/**
 * Class DeletedDriversubmissionController.
 */
class DeletedDriversubmissionController extends Controller
{
    /**
     * @var DriversubmissionService
     */
    protected $driversubmissionService;

    /**
     * DeletedDriversubmissionController constructor.
     *
     * @param  DriversubmissionService  $driversubmissionService
     */
    public function __construct(DriversubmissionService $driversubmissionService)
    {
        $this->driversubmissionService = $driversubmissionService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.driver-submission.deleted');
    }

    /**
     * @param  Driversubmission  $deletedDriversubmission
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Driversubmission $deletedDriversubmission)
    {
        $this->driversubmissionService->restore($deletedDriversubmission);

        return redirect()->route('admin.driversubmission.index')->withFlashSuccess(__('The  Driversubmissions was successfully restored.'));
    }

    /**
     * @param  Driversubmission  $deletedDriversubmission
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Driversubmission $deletedDriversubmission)
    {
        $this->driversubmissionService->destroy($deletedDriversubmission);

        return redirect()->route('admin.driversubmission.deleted')->withFlashSuccess(__('The  Driversubmissions was permanently deleted.'));
    }
}