<?php

namespace App\Domains\FailedJob\Http\Controllers\Backend\Failedjob;

use App\Http\Controllers\Controller;
use App\Domains\FailedJob\Models\Failedjob;
use App\Domains\FailedJob\Services\FailedjobService;

/**
 * Class DeletedFailedjobController.
 */
class DeletedFailedjobController extends Controller
{
    /**
     * @var FailedjobService
     */
    protected $failedjobService;

    /**
     * DeletedFailedjobController constructor.
     *
     * @param  FailedjobService  $failedjobService
     */
    public function __construct(FailedjobService $failedjobService)
    {
        $this->failedjobService = $failedjobService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.failed-job.deleted');
    }

    /**
     * @param  Failedjob  $deletedFailedjob
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Failedjob $deletedFailedjob)
    {
        $this->failedjobService->restore($deletedFailedjob);

        return redirect()->route('admin.failedjob.index')->withFlashSuccess(__('The  Failedjobs was successfully restored.'));
    }

    /**
     * @param  Failedjob  $deletedFailedjob
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Failedjob $deletedFailedjob)
    {
        $this->failedjobService->destroy($deletedFailedjob);

        return redirect()->route('admin.failedjob.deleted')->withFlashSuccess(__('The  Failedjobs was permanently deleted.'));
    }
}