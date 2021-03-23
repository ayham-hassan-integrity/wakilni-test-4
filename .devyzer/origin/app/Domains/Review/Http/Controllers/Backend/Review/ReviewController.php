<?php

namespace App\Domains\Review\Http\Controllers\Backend\Review;

use App\Http\Controllers\Controller;
use App\Domains\Review\Models\Review;
use App\Domains\Review\Services\ReviewService;
use App\Domains\Review\Http\Requests\Backend\Review\DeleteReviewRequest;
use App\Domains\Review\Http\Requests\Backend\Review\EditReviewRequest;
use App\Domains\Review\Http\Requests\Backend\Review\StoreReviewRequest;
use App\Domains\Review\Http\Requests\Backend\Review\UpdateReviewRequest;

/**
 * Class ReviewController.
 */
class ReviewController extends Controller
{
    /**
     * @var ReviewService
     */
    protected $reviewService;

    /**
     * ReviewController constructor.
     *
     * @param ReviewService $reviewService
     */
    public function __construct(ReviewService $reviewService)
    {
        $this->reviewService = $reviewService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.review.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.review.create');
    }

    /**
     * @param StoreReviewRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreReviewRequest $request)
    {
        $review = $this->reviewService->store($request->validated());

        return redirect()->route('admin.review.show', $review)->withFlashSuccess(__('The  Reviews was successfully created.'));
    }

    /**
     * @param Review $review
     *
     * @return mixed
     */
    public function show(Review $review)
    {
        return view('backend.review.show')
            ->withReview($review);
    }

    /**
     * @param EditReviewRequest $request
     * @param Review $review
     *
     * @return mixed
     */
    public function edit(EditReviewRequest $request, Review $review)
    {
        return view('backend.review.edit')
            ->withReview($review);
    }

    /**
     * @param UpdateReviewRequest $request
     * @param Review $review
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        $this->reviewService->update($review, $request->validated());

        return redirect()->route('admin.review.show', $review)->withFlashSuccess(__('The  Reviews was successfully updated.'));
    }

    /**
     * @param DeleteReviewRequest $request
     * @param Review $review
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteReviewRequest $request, Review $review)
    {
        $this->reviewService->delete($review);

        return redirect()->route('admin.$review.deleted')->withFlashSuccess(__('The  Reviews was successfully deleted.'));
    }
}