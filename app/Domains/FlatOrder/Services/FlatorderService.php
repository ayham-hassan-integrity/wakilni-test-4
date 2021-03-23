<?php

namespace App\Domains\FlatOrder\Services;

use App\Domains\FlatOrder\Models\Flatorder;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class FlatorderService.
 */
class FlatorderService extends BaseService
{
    /**
     * FlatorderService constructor.
     *
     * @param Flatorder $flatorder
     */
    public function __construct(Flatorder $flatorder)
    {
        $this->model = $flatorder;
    }

    /**
     * @param array $data
     *
     * @return Flatorder
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Flatorder
    {
        DB::beginTransaction();

        try {
            $flatorder = $this->model::create([
                'order_number' => $data['order_number'],
                'waybill' => $data['waybill'],
                'parent_id' => $data['parent_id'],
                'order_id' => $data['order_id'],
                'order_details_id' => $data['order_details_id'],
                'type_id' => $data['type_id'],
                'rate' => $data['rate'],
                'status' => $data['status'],
                'payment_status' => $data['payment_status'],
                'package_status' => $data['package_status'],
                'remaining_balance' => $data['remaining_balance'],
                'price' => $data['price'],
                'payment_type_id' => $data['payment_type_id'],
                'price_currency_id' => $data['price_currency_id'],
                'price_currency_exchange_rate' => $data['price_currency_exchange_rate'],
                'collection_amount' => $data['collection_amount'],
                'collection_type_id' => $data['collection_type_id'],
                'collection_currency_id' => $data['collection_currency_id'],
                'collection_currency_exchange_rate' => $data['collection_currency_exchange_rate'],
                'comment_id' => $data['comment_id'],
                'important_comment_text' => $data['important_comment_text'],
                'comments_count' => $data['comments_count'],
                'allow_receiver_contact' => $data['allow_receiver_contact'],
                'send_receiver_msg' => $data['send_receiver_msg'],
                'car_needed' => $data['car_needed'],
                'settled_with_wakilni' => $data['settled_with_wakilni'],
                'settled_with_customer' => $data['settled_with_customer'],
                'active' => $data['active'],
                'is_critical' => $data['is_critical'],
                'require_signature' => $data['require_signature'],
                'require_picture' => $data['require_picture'],
                'same_package' => $data['same_package'],
                'piggy_bank_submission_id' => $data['piggy_bank_submission_id'],
                'completed_on' => $data['completed_on'],
                'status_updated_at' => $data['status_updated_at'],
                'become_critical_date' => $data['become_critical_date'],
                'confirmed_at' => $data['confirmed_at'],
                'note' => $data['note'],
                'preferred_sender_date' => $data['preferred_sender_date'],
                'preferred_sender_from_time' => $data['preferred_sender_from_time'],
                'preferred_sender_to_time' => $data['preferred_sender_to_time'],
                'preferred_receiver_date' => $data['preferred_receiver_date'],
                'preferred_receiver_from_time' => $data['preferred_receiver_from_time'],
                'preferred_receiver_to_time' => $data['preferred_receiver_to_time'],
                'senderable_id' => $data['senderable_id'],
                'senderable_type' => $data['senderable_type'],
                'senderable_name' => $data['senderable_name'],
                'senderable_phone_number' => $data['senderable_phone_number'],
                'senderable_secondary_phone_number' => $data['senderable_secondary_phone_number'],
                'receiverable_id' => $data['receiverable_id'],
                'receiverable_type' => $data['receiverable_type'],
                'receiverable_name' => $data['receiverable_name'],
                'receiverable_phone_number' => $data['receiverable_phone_number'],
                'receiverable_secondary_phone_number' => $data['receiverable_secondary_phone_number'],
                'sender_location_id' => $data['sender_location_id'],
                'sender_location_label' => $data['sender_location_label'],
                'sender_area_id' => $data['sender_area_id'],
                'sender_area_label' => $data['sender_area_label'],
                'sender_zone_id' => $data['sender_zone_id'],
                'sender_zone_label' => $data['sender_zone_label'],
                'receiver_location_id' => $data['receiver_location_id'],
                'receiver_location_label' => $data['receiver_location_label'],
                'receiver_area_id' => $data['receiver_area_id'],
                'receiver_area_label' => $data['receiver_area_label'],
                'receiver_zone_id' => $data['receiver_zone_id'],
                'receiver_zone_label' => $data['receiver_zone_label'],
                'task_scheduled_date' => $data['task_scheduled_date'],
                'task_scheduled_from_time' => $data['task_scheduled_from_time'],
                'task_scheduled_to_time' => $data['task_scheduled_to_time'],
                'task_driver_id' => $data['task_driver_id'],
                'task_driver_user_id' => $data['task_driver_user_id'],
                'task_driver_contact_id' => $data['task_driver_contact_id'],
                'task_driver_user_name' => $data['task_driver_user_name'],
                'task_driver_user_phone_number' => $data['task_driver_user_phone_number'],
                'task_driver_user_is_active' => $data['task_driver_user_is_active'],
                'last_task_driver_id' => $data['last_task_driver_id'],
                'last_task_driver_user_id' => $data['last_task_driver_user_id'],
                'last_task_driver_contact_id' => $data['last_task_driver_contact_id'],
                'last_task_driver_user_name' => $data['last_task_driver_user_name'],
                'last_task_driver_user_phone_number' => $data['last_task_driver_user_phone_number'],
                'last_task_driver_user_is_active' => $data['last_task_driver_user_is_active'],
                'packages' => $data['packages'],
                'customer_id' => $data['customer_id'],
                'customer_name' => $data['customer_name'],
                'customer_golden_rule' => $data['customer_golden_rule'],
                'customer_is_active' => $data['customer_is_active'],
                'customer_account_manager_id' => $data['customer_account_manager_id'],
                'customer_industry_id' => $data['customer_industry_id'],
                'customer_user_id' => $data['customer_user_id'],
                'customer_user_name' => $data['customer_user_name'],
                'piggy_bank_id' => $data['piggy_bank_id'],
                'store_id' => $data['store_id'],
                'app_token_id' => $data['app_token_id'],
                'app_ref_id' => $data['app_ref_id'],
                'fulfillment_id' => $data['fulfillment_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this flatorder. Please try again.'));
        }

        DB::commit();

        return $flatorder;
    }

    /**
     * @param Flatorder $flatorder
     * @param array $data
     *
     * @return Flatorder
     * @throws \Throwable
     */
    public function update(Flatorder $flatorder, array $data = []): Flatorder
    {
        DB::beginTransaction();

        try {
            $flatorder->update([
                'order_number' => $data['order_number'],
                'waybill' => $data['waybill'],
                'parent_id' => $data['parent_id'],
                'order_id' => $data['order_id'],
                'order_details_id' => $data['order_details_id'],
                'type_id' => $data['type_id'],
                'rate' => $data['rate'],
                'status' => $data['status'],
                'payment_status' => $data['payment_status'],
                'package_status' => $data['package_status'],
                'remaining_balance' => $data['remaining_balance'],
                'price' => $data['price'],
                'payment_type_id' => $data['payment_type_id'],
                'price_currency_id' => $data['price_currency_id'],
                'price_currency_exchange_rate' => $data['price_currency_exchange_rate'],
                'collection_amount' => $data['collection_amount'],
                'collection_type_id' => $data['collection_type_id'],
                'collection_currency_id' => $data['collection_currency_id'],
                'collection_currency_exchange_rate' => $data['collection_currency_exchange_rate'],
                'comment_id' => $data['comment_id'],
                'important_comment_text' => $data['important_comment_text'],
                'comments_count' => $data['comments_count'],
                'allow_receiver_contact' => $data['allow_receiver_contact'],
                'send_receiver_msg' => $data['send_receiver_msg'],
                'car_needed' => $data['car_needed'],
                'settled_with_wakilni' => $data['settled_with_wakilni'],
                'settled_with_customer' => $data['settled_with_customer'],
                'active' => $data['active'],
                'is_critical' => $data['is_critical'],
                'require_signature' => $data['require_signature'],
                'require_picture' => $data['require_picture'],
                'same_package' => $data['same_package'],
                'piggy_bank_submission_id' => $data['piggy_bank_submission_id'],
                'completed_on' => $data['completed_on'],
                'status_updated_at' => $data['status_updated_at'],
                'become_critical_date' => $data['become_critical_date'],
                'confirmed_at' => $data['confirmed_at'],
                'note' => $data['note'],
                'preferred_sender_date' => $data['preferred_sender_date'],
                'preferred_sender_from_time' => $data['preferred_sender_from_time'],
                'preferred_sender_to_time' => $data['preferred_sender_to_time'],
                'preferred_receiver_date' => $data['preferred_receiver_date'],
                'preferred_receiver_from_time' => $data['preferred_receiver_from_time'],
                'preferred_receiver_to_time' => $data['preferred_receiver_to_time'],
                'senderable_id' => $data['senderable_id'],
                'senderable_type' => $data['senderable_type'],
                'senderable_name' => $data['senderable_name'],
                'senderable_phone_number' => $data['senderable_phone_number'],
                'senderable_secondary_phone_number' => $data['senderable_secondary_phone_number'],
                'receiverable_id' => $data['receiverable_id'],
                'receiverable_type' => $data['receiverable_type'],
                'receiverable_name' => $data['receiverable_name'],
                'receiverable_phone_number' => $data['receiverable_phone_number'],
                'receiverable_secondary_phone_number' => $data['receiverable_secondary_phone_number'],
                'sender_location_id' => $data['sender_location_id'],
                'sender_location_label' => $data['sender_location_label'],
                'sender_area_id' => $data['sender_area_id'],
                'sender_area_label' => $data['sender_area_label'],
                'sender_zone_id' => $data['sender_zone_id'],
                'sender_zone_label' => $data['sender_zone_label'],
                'receiver_location_id' => $data['receiver_location_id'],
                'receiver_location_label' => $data['receiver_location_label'],
                'receiver_area_id' => $data['receiver_area_id'],
                'receiver_area_label' => $data['receiver_area_label'],
                'receiver_zone_id' => $data['receiver_zone_id'],
                'receiver_zone_label' => $data['receiver_zone_label'],
                'task_scheduled_date' => $data['task_scheduled_date'],
                'task_scheduled_from_time' => $data['task_scheduled_from_time'],
                'task_scheduled_to_time' => $data['task_scheduled_to_time'],
                'task_driver_id' => $data['task_driver_id'],
                'task_driver_user_id' => $data['task_driver_user_id'],
                'task_driver_contact_id' => $data['task_driver_contact_id'],
                'task_driver_user_name' => $data['task_driver_user_name'],
                'task_driver_user_phone_number' => $data['task_driver_user_phone_number'],
                'task_driver_user_is_active' => $data['task_driver_user_is_active'],
                'last_task_driver_id' => $data['last_task_driver_id'],
                'last_task_driver_user_id' => $data['last_task_driver_user_id'],
                'last_task_driver_contact_id' => $data['last_task_driver_contact_id'],
                'last_task_driver_user_name' => $data['last_task_driver_user_name'],
                'last_task_driver_user_phone_number' => $data['last_task_driver_user_phone_number'],
                'last_task_driver_user_is_active' => $data['last_task_driver_user_is_active'],
                'packages' => $data['packages'],
                'customer_id' => $data['customer_id'],
                'customer_name' => $data['customer_name'],
                'customer_golden_rule' => $data['customer_golden_rule'],
                'customer_is_active' => $data['customer_is_active'],
                'customer_account_manager_id' => $data['customer_account_manager_id'],
                'customer_industry_id' => $data['customer_industry_id'],
                'customer_user_id' => $data['customer_user_id'],
                'customer_user_name' => $data['customer_user_name'],
                'piggy_bank_id' => $data['piggy_bank_id'],
                'store_id' => $data['store_id'],
                'app_token_id' => $data['app_token_id'],
                'app_ref_id' => $data['app_ref_id'],
                'fulfillment_id' => $data['fulfillment_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this flatorder. Please try again.'));
        }

        DB::commit();

        return $flatorder;
    }

    /**
     * @param Flatorder $flatorder
     *
     * @return Flatorder
     * @throws GeneralException
     */
    public function delete(Flatorder $flatorder): Flatorder
    {
        if ($this->deleteById($flatorder->id)) {
            return $flatorder;
        }

        throw new GeneralException('There was a problem deleting this flatorder. Please try again.');
    }

    /**
     * @param Flatorder $flatorder
     *
     * @return Flatorder
     * @throws GeneralException
     */
    public function restore(Flatorder $flatorder): Flatorder
    {
        if ($flatorder->restore()) {
            return $flatorder;
        }

        throw new GeneralException(__('There was a problem restoring this  Flatorders. Please try again.'));
    }

    /**
     * @param Flatorder $flatorder
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Flatorder $flatorder): bool
    {
        if ($flatorder->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Flatorders. Please try again.'));
    }
}