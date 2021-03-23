<?php

namespace App\Domains\Order\Services;

use App\Domains\Order\Models\Order;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class OrderService.
 */
class OrderService extends BaseService
{
    /**
     * OrderService constructor.
     *
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->model = $order;
    }

    /**
     * @param array $data
     *
     * @return Order
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Order
    {
        DB::beginTransaction();

        try {
            $order = $this->model::create([
                'order_number' => $data['order_number'],
                'rate' => $data['rate'],
                'completed_on' => $data['completed_on'],
                'payment_status' => $data['payment_status'],
                'package_status' => $data['package_status'],
                'status' => $data['status'],
                'status_updated_at' => $data['status_updated_at'],
                'remaining_balance' => $data['remaining_balance'],
                'price' => $data['price'],
                'parent_id' => $data['parent_id'],
                'order_details_id' => $data['order_details_id'],
                'comment_id' => $data['comment_id'],
                'waybill' => $data['waybill'],
                'allow_receiver_contact' => $data['allow_receiver_contact'],
                'send_receiver_msg' => $data['send_receiver_msg'],
                'car_needed' => $data['car_needed'],
                'settled_with_wakilni' => $data['settled_with_wakilni'],
                'settled_with_customer' => $data['settled_with_customer'],
                'piggy_bank_submission_id' => $data['piggy_bank_submission_id'],
                'active' => $data['active'],
                'is_critical' => $data['is_critical'],
                'become_critical_date' => $data['become_critical_date'],
                'confirmed_at' => $data['confirmed_at'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this order. Please try again.'));
        }

        DB::commit();

        return $order;
    }

    /**
     * @param Order $order
     * @param array $data
     *
     * @return Order
     * @throws \Throwable
     */
    public function update(Order $order, array $data = []): Order
    {
        DB::beginTransaction();

        try {
            $order->update([
                'order_number' => $data['order_number'],
                'rate' => $data['rate'],
                'completed_on' => $data['completed_on'],
                'payment_status' => $data['payment_status'],
                'package_status' => $data['package_status'],
                'status' => $data['status'],
                'status_updated_at' => $data['status_updated_at'],
                'remaining_balance' => $data['remaining_balance'],
                'price' => $data['price'],
                'parent_id' => $data['parent_id'],
                'order_details_id' => $data['order_details_id'],
                'comment_id' => $data['comment_id'],
                'waybill' => $data['waybill'],
                'allow_receiver_contact' => $data['allow_receiver_contact'],
                'send_receiver_msg' => $data['send_receiver_msg'],
                'car_needed' => $data['car_needed'],
                'settled_with_wakilni' => $data['settled_with_wakilni'],
                'settled_with_customer' => $data['settled_with_customer'],
                'piggy_bank_submission_id' => $data['piggy_bank_submission_id'],
                'active' => $data['active'],
                'is_critical' => $data['is_critical'],
                'become_critical_date' => $data['become_critical_date'],
                'confirmed_at' => $data['confirmed_at'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this order. Please try again.'));
        }

        DB::commit();

        return $order;
    }

    /**
     * @param Order $order
     *
     * @return Order
     * @throws GeneralException
     */
    public function delete(Order $order): Order
    {
        if ($this->deleteById($order->id)) {
            return $order;
        }

        throw new GeneralException('There was a problem deleting this order. Please try again.');
    }

    /**
     * @param Order $order
     *
     * @return Order
     * @throws GeneralException
     */
    public function restore(Order $order): Order
    {
        if ($order->restore()) {
            return $order;
        }

        throw new GeneralException(__('There was a problem restoring this  Orders. Please try again.'));
    }

    /**
     * @param Order $order
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Order $order): bool
    {
        if ($order->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Orders. Please try again.'));
    }
}