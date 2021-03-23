<?php

namespace App\Domains\DriverSubmission\Http\Controllers\Backend\Driversubmission;

use App\Http\Controllers\Controller;
use App\Domains\DriverSubmission\Models\Driversubmission;
use App\Domains\DriverSubmission\Services\DriversubmissionService;
use App\Domains\DriverSubmission\Http\Requests\Backend\Driversubmission\DeleteDriversubmissionRequest;
use App\Domains\DriverSubmission\Http\Requests\Backend\Driversubmission\EditDriversubmissionRequest;
use App\Domains\DriverSubmission\Http\Requests\Backend\Driversubmission\StoreDriversubmissionRequest;
use App\Domains\DriverSubmission\Http\Requests\Backend\Driversubmission\UpdateDriversubmissionRequest;

/**
 * Class DriversubmissionController.
 */
class DriversubmissionController extends Controller
{
    /**
     * @var DriversubmissionService
     */
    protected $driversubmissionService;

    /**
     * DriversubmissionController constructor.
     *
     * @param DriversubmissionService $driversubmissionService
     */
    public function __construct(DriversubmissionService $driversubmissionService)
    {
        $this->driversubmissionService = $driversubmissionService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.driver-submission.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.driver-submission.create');
    }

    /**
     * @param StoreDriversubmissionRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreDriversubmissionRequest $request)
    {
        $driversubmission = $this->driversubmissionService->store($request->validated());

        return redirect()->route('admin.driversubmission.show', $driversubmission)->withFlashSuccess(__('The  Driversubmissions was successfully created.'));
    }

    /**
     * @param Driversubmission $driversubmission
     *
     * @return mixed
     */
    public function show(Driversubmission $driversubmission)
    {
        return view('backend.driver-submission.show')
            ->withDriversubmission($driversubmission);
    }

    /**
     * @param EditDriversubmissionRequest $request
     * @param Driversubmission $driversubmission
     *
     * @return mixed
     */
    public function edit(EditDriversubmissionRequest $request, Driversubmission $driversubmission)
    {
        return view('backend.driver-submission.edit')
            ->withDriversubmission($driversubmission);
    }

    /**
     * @param UpdateDriversubmissionRequest $request
     * @param Driversubmission $driversubmission
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateDriversubmissionRequest $request, Driversubmission $driversubmission)
    {
        $this->driversubmissionService->update($driversubmission, $request->validated());

        return redirect()->route('admin.driversubmission.show', $driversubmission)->withFlashSuccess(__('The  Driversubmissions was successfully updated.'));
    }

    /**
     * @param DeleteDriversubmissionRequest $request
     * @param Driversubmission $driversubmission
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteDriversubmissionRequest $request, Driversubmission $driversubmission)
    {
        $this->driversubmissionService->delete($driversubmission);

        return redirect()->route('admin.$driversubmission.deleted')->withFlashSuccess(__('The  Driversubmissions was successfully deleted.'));
    }
}