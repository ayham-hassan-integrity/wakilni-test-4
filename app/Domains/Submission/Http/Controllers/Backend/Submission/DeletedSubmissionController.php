<?php

namespace App\Domains\Submission\Http\Controllers\Backend\Submission;

use App\Http\Controllers\Controller;
use App\Domains\Submission\Models\Submission;
use App\Domains\Submission\Services\SubmissionService;

/**
 * Class DeletedSubmissionController.
 */
class DeletedSubmissionController extends Controller
{
    /**
     * @var SubmissionService
     */
    protected $submissionService;

    /**
     * DeletedSubmissionController constructor.
     *
     * @param  SubmissionService  $submissionService
     */
    public function __construct(SubmissionService $submissionService)
    {
        $this->submissionService = $submissionService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.submission.deleted');
    }

    /**
     * @param  Submission  $deletedSubmission
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Submission $deletedSubmission)
    {
        $this->submissionService->restore($deletedSubmission);

        return redirect()->route('admin.submission.index')->withFlashSuccess(__('The  Submissions was successfully restored.'));
    }

    /**
     * @param  Submission  $deletedSubmission
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Submission $deletedSubmission)
    {
        $this->submissionService->destroy($deletedSubmission);

        return redirect()->route('admin.submission.deleted')->withFlashSuccess(__('The  Submissions was permanently deleted.'));
    }
}