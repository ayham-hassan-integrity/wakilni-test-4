<?php

namespace App\Domains\Task\Services;

use App\Domains\Task\Models\Task;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class TaskService.
 */
class TaskService extends BaseService
{
    /**
     * TaskService constructor.
     *
     * @param Task $task
     */
    public function __construct(Task $task)
    {
        $this->model = $task;
    }

    /**
     * @param array $data
     *
     * @return Task
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Task
    {
        DB::beginTransaction();

        try {
            $task = $this->model::create([
                'sequence' => $data['sequence'],
                'overall_sequence' => $data['overall_sequence'],
                'deliver_amount' => $data['deliver_amount'],
                'receive_amount' => $data['receive_amount'],
                'deliver_package' => $data['deliver_package'],
                'receive_package' => $data['receive_package'],
                'note' => $data['note'],
                'fail_reason' => $data['fail_reason'],
                'collection_note' => $data['collection_note'],
                'preferred_date' => $data['preferred_date'],
                'preferred_from_time' => $data['preferred_from_time'],
                'preferred_to_time' => $data['preferred_to_time'],
                'collection_date' => $data['collection_date'],
                'require_signature' => $data['require_signature'],
                'status' => $data['status'],
                'submitted' => $data['submitted'],
                'secured' => $data['secured'],
                'receiverable_id' => $data['receiverable_id'],
                'receiverable_type' => $data['receiverable_type'],
                'order_id' => $data['order_id'],
                'location_id' => $data['location_id'],
                'driver_id' => $data['driver_id'],
                'type_id' => $data['type_id'],
                'customer_id' => $data['customer_id'],
                'store_id' => $data['store_id'],
                'require_picture' => $data['require_picture'],
                'picture_id' => $data['picture_id'],
                'signature_id' => $data['signature_id'],
                'driver_submission_id' => $data['driver_submission_id'],
                'piggy_bank_id' => $data['piggy_bank_id'],
                'vehicle_id' => $data['vehicle_id'],
                'receive_price' => $data['receive_price'],
                'deliver_amount_currency_rate' => $data['deliver_amount_currency_rate'],
                'receive_amount_currency_rate' => $data['receive_amount_currency_rate'],
                'amount_currency' => $data['amount_currency'],
                'price_currency' => $data['price_currency'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this task. Please try again.'));
        }

        DB::commit();

        return $task;
    }

    /**
     * @param Task $task
     * @param array $data
     *
     * @return Task
     * @throws \Throwable
     */
    public function update(Task $task, array $data = []): Task
    {
        DB::beginTransaction();

        try {
            $task->update([
                'sequence' => $data['sequence'],
                'overall_sequence' => $data['overall_sequence'],
                'deliver_amount' => $data['deliver_amount'],
                'receive_amount' => $data['receive_amount'],
                'deliver_package' => $data['deliver_package'],
                'receive_package' => $data['receive_package'],
                'note' => $data['note'],
                'fail_reason' => $data['fail_reason'],
                'collection_note' => $data['collection_note'],
                'preferred_date' => $data['preferred_date'],
                'preferred_from_time' => $data['preferred_from_time'],
                'preferred_to_time' => $data['preferred_to_time'],
                'collection_date' => $data['collection_date'],
                'require_signature' => $data['require_signature'],
                'status' => $data['status'],
                'submitted' => $data['submitted'],
                'secured' => $data['secured'],
                'receiverable_id' => $data['receiverable_id'],
                'receiverable_type' => $data['receiverable_type'],
                'order_id' => $data['order_id'],
                'location_id' => $data['location_id'],
                'driver_id' => $data['driver_id'],
                'type_id' => $data['type_id'],
                'customer_id' => $data['customer_id'],
                'store_id' => $data['store_id'],
                'require_picture' => $data['require_picture'],
                'picture_id' => $data['picture_id'],
                'signature_id' => $data['signature_id'],
                'driver_submission_id' => $data['driver_submission_id'],
                'piggy_bank_id' => $data['piggy_bank_id'],
                'vehicle_id' => $data['vehicle_id'],
                'receive_price' => $data['receive_price'],
                'deliver_amount_currency_rate' => $data['deliver_amount_currency_rate'],
                'receive_amount_currency_rate' => $data['receive_amount_currency_rate'],
                'amount_currency' => $data['amount_currency'],
                'price_currency' => $data['price_currency'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this task. Please try again.'));
        }

        DB::commit();

        return $task;
    }

    /**
     * @param Task $task
     *
     * @return Task
     * @throws GeneralException
     */
    public function delete(Task $task): Task
    {
        if ($this->deleteById($task->id)) {
            return $task;
        }

        throw new GeneralException('There was a problem deleting this task. Please try again.');
    }

    /**
     * @param Task $task
     *
     * @return Task
     * @throws GeneralException
     */
    public function restore(Task $task): Task
    {
        if ($task->restore()) {
            return $task;
        }

        throw new GeneralException(__('There was a problem restoring this  Tasks. Please try again.'));
    }

    /**
     * @param Task $task
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Task $task): bool
    {
        if ($task->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Tasks. Please try again.'));
    }
}