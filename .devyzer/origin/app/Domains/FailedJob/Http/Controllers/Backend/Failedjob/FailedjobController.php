<?php

namespace App\Domains\FailedJob\Http\Controllers\Backend\Failedjob;

use App\Http\Controllers\Controller;
use App\Domains\FailedJob\Models\Failedjob;
use App\Domains\FailedJob\Services\FailedjobService;
use App\Domains\FailedJob\Http\Requests\Backend\Failedjob\DeleteFailedjobRequest;
use App\Domains\FailedJob\Http\Requests\Backend\Failedjob\EditFailedjobRequest;
use App\Domains\FailedJob\Http\Requests\Backend\Failedjob\StoreFailedjobRequest;
use App\Domains\FailedJob\Http\Requests\Backend\Failedjob\UpdateFailedjobRequest;

/**
 * Class FailedjobController.
 */
class FailedjobController extends Controller
{
    /**
     * @var FailedjobService
     */
    protected $failedjobService;

    /**
     * FailedjobController constructor.
     *
     * @param FailedjobService $failedjobService
     */
    public function __construct(FailedjobService $failedjobService)
    {
        $this->failedjobService = $failedjobService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.failed-job.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.failed-job.create');
    }

    /**
     * @param StoreFailedjobRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreFailedjobRequest $request)
    {
        $failedjob = $this->failedjobService->store($request->validated());

        return redirect()->route('admin.failedjob.show', $failedjob)->withFlashSuccess(__('The  Failedjobs was successfully created.'));
    }

    /**
     * @param Failedjob $failedjob
     *
     * @return mixed
     */
    public function show(Failedjob $failedjob)
    {
        return view('backend.failed-job.show')
            ->withFailedjob($failedjob);
    }

    /**
     * @param EditFailedjobRequest $request
     * @param Failedjob $failedjob
     *
     * @return mixed
     */
    public function edit(EditFailedjobRequest $request, Failedjob $failedjob)
    {
        return view('backend.failed-job.edit')
            ->withFailedjob($failedjob);
    }

    /**
     * @param UpdateFailedjobRequest $request
     * @param Failedjob $failedjob
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateFailedjobRequest $request, Failedjob $failedjob)
    {
        $this->failedjobService->update($failedjob, $request->validated());

        return redirect()->route('admin.failedjob.show', $failedjob)->withFlashSuccess(__('The  Failedjobs was successfully updated.'));
    }

    /**
     * @param DeleteFailedjobRequest $request
     * @param Failedjob $failedjob
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteFailedjobRequest $request, Failedjob $failedjob)
    {
        $this->failedjobService->delete($failedjob);

        return redirect()->route('admin.$failedjob.deleted')->withFlashSuccess(__('The  Failedjobs was successfully deleted.'));
    }
}