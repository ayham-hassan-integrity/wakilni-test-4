<?php

namespace App\Domains\Submission\Http\Controllers\Backend\Submission;

use App\Http\Controllers\Controller;
use App\Domains\Submission\Models\Submission;
use App\Domains\Submission\Services\SubmissionService;
use App\Domains\Submission\Http\Requests\Backend\Submission\DeleteSubmissionRequest;
use App\Domains\Submission\Http\Requests\Backend\Submission\EditSubmissionRequest;
use App\Domains\Submission\Http\Requests\Backend\Submission\StoreSubmissionRequest;
use App\Domains\Submission\Http\Requests\Backend\Submission\UpdateSubmissionRequest;

/**
 * Class SubmissionController.
 */
class SubmissionController extends Controller
{
    /**
     * @var SubmissionService
     */
    protected $submissionService;

    /**
     * SubmissionController constructor.
     *
     * @param SubmissionService $submissionService
     */
    public function __construct(SubmissionService $submissionService)
    {
        $this->submissionService = $submissionService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.submission.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.submission.create');
    }

    /**
     * @param StoreSubmissionRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreSubmissionRequest $request)
    {
        $submission = $this->submissionService->store($request->validated());

        return redirect()->route('admin.submission.show', $submission)->withFlashSuccess(__('The  Submissions was successfully created.'));
    }

    /**
     * @param Submission $submission
     *
     * @return mixed
     */
    public function show(Submission $submission)
    {
        return view('backend.submission.show')
            ->withSubmission($submission);
    }

    /**
     * @param EditSubmissionRequest $request
     * @param Submission $submission
     *
     * @return mixed
     */
    public function edit(EditSubmissionRequest $request, Submission $submission)
    {
        return view('backend.submission.edit')
            ->withSubmission($submission);
    }

    /**
     * @param UpdateSubmissionRequest $request
     * @param Submission $submission
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateSubmissionRequest $request, Submission $submission)
    {
        $this->submissionService->update($submission, $request->validated());

        return redirect()->route('admin.submission.show', $submission)->withFlashSuccess(__('The  Submissions was successfully updated.'));
    }

    /**
     * @param DeleteSubmissionRequest $request
     * @param Submission $submission
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteSubmissionRequest $request, Submission $submission)
    {
        $this->submissionService->delete($submission);

        return redirect()->route('admin.$submission.deleted')->withFlashSuccess(__('The  Submissions was successfully deleted.'));
    }
}