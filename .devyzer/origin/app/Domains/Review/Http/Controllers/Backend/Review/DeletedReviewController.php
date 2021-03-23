<?php

namespace App\Domains\Review\Http\Controllers\Backend\Review;

use App\Http\Controllers\Controller;
use App\Domains\Review\Models\Review;
use App\Domains\Review\Services\ReviewService;

/**
 * Class DeletedReviewController.
 */
class DeletedReviewController extends Controller
{
    /**
     * @var ReviewService
     */
    protected $reviewService;

    /**
     * DeletedReviewController constructor.
     *
     * @param  ReviewService  $reviewService
     */
    public function __construct(ReviewService $reviewService)
    {
        $this->reviewService = $reviewService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.review.deleted');
    }

    /**
     * @param  Review  $deletedReview
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Review $deletedReview)
    {
        $this->reviewService->restore($deletedReview);

        return redirect()->route('admin.review.index')->withFlashSuccess(__('The  Reviews was successfully restored.'));
    }

    /**
     * @param  Review  $deletedReview
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Review $deletedReview)
    {
        $this->reviewService->destroy($deletedReview);

        return redirect()->route('admin.review.deleted')->withFlashSuccess(__('The  Reviews was permanently deleted.'));
    }
}