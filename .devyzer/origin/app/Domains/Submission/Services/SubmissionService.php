<?php

namespace App\Domains\Submission\Services;

use App\Domains\Submission\Models\Submission;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class SubmissionService.
 */
class SubmissionService extends BaseService
{
    /**
     * SubmissionService constructor.
     *
     * @param Submission $submission
     */
    public function __construct(Submission $submission)
    {
        $this->model = $submission;
    }

    /**
     * @param array $data
     *
     * @return Submission
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Submission
    {
        DB::beginTransaction();

        try {
            $submission = $this->model::create([
                'amount' => $data['amount'],
                'corrected_amount' => $data['corrected_amount'],
                'type_id' => $data['type_id'],
                'driver_submission_id' => $data['driver_submission_id'],
                'currency_id' => $data['currency_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this submission. Please try again.'));
        }

        DB::commit();

        return $submission;
    }

    /**
     * @param Submission $submission
     * @param array $data
     *
     * @return Submission
     * @throws \Throwable
     */
    public function update(Submission $submission, array $data = []): Submission
    {
        DB::beginTransaction();

        try {
            $submission->update([
                'amount' => $data['amount'],
                'corrected_amount' => $data['corrected_amount'],
                'type_id' => $data['type_id'],
                'driver_submission_id' => $data['driver_submission_id'],
                'currency_id' => $data['currency_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this submission. Please try again.'));
        }

        DB::commit();

        return $submission;
    }

    /**
     * @param Submission $submission
     *
     * @return Submission
     * @throws GeneralException
     */
    public function delete(Submission $submission): Submission
    {
        if ($this->deleteById($submission->id)) {
            return $submission;
        }

        throw new GeneralException('There was a problem deleting this submission. Please try again.');
    }

    /**
     * @param Submission $submission
     *
     * @return Submission
     * @throws GeneralException
     */
    public function restore(Submission $submission): Submission
    {
        if ($submission->restore()) {
            return $submission;
        }

        throw new GeneralException(__('There was a problem restoring this  Submissions. Please try again.'));
    }

    /**
     * @param Submission $submission
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Submission $submission): bool
    {
        if ($submission->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Submissions. Please try again.'));
    }
}