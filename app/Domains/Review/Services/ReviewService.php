<?php

namespace App\Domains\Review\Services;

use App\Domains\Review\Models\Review;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class ReviewService.
 */
class ReviewService extends BaseService
{
    /**
     * ReviewService constructor.
     *
     * @param Review $review
     */
    public function __construct(Review $review)
    {
        $this->model = $review;
    }

    /**
     * @param array $data
     *
     * @return Review
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Review
    {
        DB::beginTransaction();

        try {
            $review = $this->model::create([
                'order_id' => $data['order_id'],
                'customer_id' => $data['customer_id'],
                'recipient_id' => $data['recipient_id'],
                'rate' => $data['rate'],
                'feedback_message' => $data['feedback_message'],
                'viewed' => $data['viewed'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this review. Please try again.'));
        }

        DB::commit();

        return $review;
    }

    /**
     * @param Review $review
     * @param array $data
     *
     * @return Review
     * @throws \Throwable
     */
    public function update(Review $review, array $data = []): Review
    {
        DB::beginTransaction();

        try {
            $review->update([
                'order_id' => $data['order_id'],
                'customer_id' => $data['customer_id'],
                'recipient_id' => $data['recipient_id'],
                'rate' => $data['rate'],
                'feedback_message' => $data['feedback_message'],
                'viewed' => $data['viewed'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this review. Please try again.'));
        }

        DB::commit();

        return $review;
    }

    /**
     * @param Review $review
     *
     * @return Review
     * @throws GeneralException
     */
    public function delete(Review $review): Review
    {
        if ($this->deleteById($review->id)) {
            return $review;
        }

        throw new GeneralException('There was a problem deleting this review. Please try again.');
    }

    /**
     * @param Review $review
     *
     * @return Review
     * @throws GeneralException
     */
    public function restore(Review $review): Review
    {
        if ($review->restore()) {
            return $review;
        }

        throw new GeneralException(__('There was a problem restoring this  Reviews. Please try again.'));
    }

    /**
     * @param Review $review
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Review $review): bool
    {
        if ($review->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Reviews. Please try again.'));
    }
}