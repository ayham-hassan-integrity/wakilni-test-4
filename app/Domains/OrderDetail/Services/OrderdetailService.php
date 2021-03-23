<?php

namespace App\Domains\OrderDetail\Services;

use App\Domains\OrderDetail\Models\Orderdetail;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class OrderdetailService.
 */
class OrderdetailService extends BaseService
{
    /**
     * OrderdetailService constructor.
     *
     * @param Orderdetail $orderdetail
     */
    public function __construct(Orderdetail $orderdetail)
    {
        $this->model = $orderdetail;
    }

    /**
     * @param array $data
     *
     * @return Orderdetail
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Orderdetail
    {
        DB::beginTransaction();

        try {
            $orderdetail = $this->model::create([
                'collection_amount' => $data['collection_amount'],
                'note' => $data['note'],
                'preferred_sender_date' => $data['preferred_sender_date'],
                'preferred_sender_from_time' => $data['preferred_sender_from_time'],
                'preferred_sender_to_time' => $data['preferred_sender_to_time'],
                'preferred_receiver_date' => $data['preferred_receiver_date'],
                'preferred_receiver_from_time' => $data['preferred_receiver_from_time'],
                'preferred_receiver_to_time' => $data['preferred_receiver_to_time'],
                'require_signature' => $data['require_signature'],
                'require_picture' => $data['require_picture'],
                'same_package' => $data['same_package'],
                'senderable_id' => $data['senderable_id'],
                'senderable_type' => $data['senderable_type'],
                'receiverable_id' => $data['receiverable_id'],
                'receiverable_type' => $data['receiverable_type'],
                'payment_type_id' => $data['payment_type_id'],
                'cash_collection_type_id' => $data['cash_collection_type_id'],
                'customer_id' => $data['customer_id'],
                'piggy_bank_id' => $data['piggy_bank_id'],
                'type_id' => $data['type_id'],
                'sender_location_id' => $data['sender_location_id'],
                'receiver_location_id' => $data['receiver_location_id'],
                'collection_currency' => $data['collection_currency'],
                'store_id' => $data['store_id'],
                'app_token_id' => $data['app_token_id'],
                'app_ref_id' => $data['app_ref_id'],
                'fulfillment_id' => $data['fulfillment_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this orderdetail. Please try again.'));
        }

        DB::commit();

        return $orderdetail;
    }

    /**
     * @param Orderdetail $orderdetail
     * @param array $data
     *
     * @return Orderdetail
     * @throws \Throwable
     */
    public function update(Orderdetail $orderdetail, array $data = []): Orderdetail
    {
        DB::beginTransaction();

        try {
            $orderdetail->update([
                'collection_amount' => $data['collection_amount'],
                'note' => $data['note'],
                'preferred_sender_date' => $data['preferred_sender_date'],
                'preferred_sender_from_time' => $data['preferred_sender_from_time'],
                'preferred_sender_to_time' => $data['preferred_sender_to_time'],
                'preferred_receiver_date' => $data['preferred_receiver_date'],
                'preferred_receiver_from_time' => $data['preferred_receiver_from_time'],
                'preferred_receiver_to_time' => $data['preferred_receiver_to_time'],
                'require_signature' => $data['require_signature'],
                'require_picture' => $data['require_picture'],
                'same_package' => $data['same_package'],
                'senderable_id' => $data['senderable_id'],
                'senderable_type' => $data['senderable_type'],
                'receiverable_id' => $data['receiverable_id'],
                'receiverable_type' => $data['receiverable_type'],
                'payment_type_id' => $data['payment_type_id'],
                'cash_collection_type_id' => $data['cash_collection_type_id'],
                'customer_id' => $data['customer_id'],
                'piggy_bank_id' => $data['piggy_bank_id'],
                'type_id' => $data['type_id'],
                'sender_location_id' => $data['sender_location_id'],
                'receiver_location_id' => $data['receiver_location_id'],
                'collection_currency' => $data['collection_currency'],
                'store_id' => $data['store_id'],
                'app_token_id' => $data['app_token_id'],
                'app_ref_id' => $data['app_ref_id'],
                'fulfillment_id' => $data['fulfillment_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this orderdetail. Please try again.'));
        }

        DB::commit();

        return $orderdetail;
    }

    /**
     * @param Orderdetail $orderdetail
     *
     * @return Orderdetail
     * @throws GeneralException
     */
    public function delete(Orderdetail $orderdetail): Orderdetail
    {
        if ($this->deleteById($orderdetail->id)) {
            return $orderdetail;
        }

        throw new GeneralException('There was a problem deleting this orderdetail. Please try again.');
    }

    /**
     * @param Orderdetail $orderdetail
     *
     * @return Orderdetail
     * @throws GeneralException
     */
    public function restore(Orderdetail $orderdetail): Orderdetail
    {
        if ($orderdetail->restore()) {
            return $orderdetail;
        }

        throw new GeneralException(__('There was a problem restoring this  Orderdetails. Please try again.'));
    }

    /**
     * @param Orderdetail $orderdetail
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Orderdetail $orderdetail): bool
    {
        if ($orderdetail->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Orderdetails. Please try again.'));
    }
}