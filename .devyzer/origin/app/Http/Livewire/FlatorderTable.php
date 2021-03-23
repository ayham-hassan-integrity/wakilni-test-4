<?php

namespace App\Http\Livewire;

use App\Domains\FlatOrder\Models\Flatorder;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class FlatorderTable.
 */
class FlatorderTable extends TableComponent
{
    /**
     * @var string
     */
    public $sortField = 'id';

    /**
     * @var string
     */
    public $status;

    /**
     * @param string $status
     */
    public function mount($status = null): void
    {
        $this->status = $status;
    }

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        $query = Flatorder::query();

        if ($this->status === 'deleted') {
            return $query->onlyTrashed();
        }

        return $query;
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('id'), 'id')
,
            Column::make(__('order_number'), 'order_number')
,
            Column::make(__('waybill'), 'waybill')
,
            Column::make(__('parent_id'), 'parent_id')
,
            Column::make(__('order_id'), 'order_id')
,
            Column::make(__('order_details_id'), 'order_details_id')
,
            Column::make(__('type_id'), 'type_id')
,
            Column::make(__('rate'), 'rate')
,
            Column::make(__('status'), 'status')
,
            Column::make(__('payment_status'), 'payment_status')
,
            Column::make(__('package_status'), 'package_status')
,
            Column::make(__('remaining_balance'), 'remaining_balance')
,
            Column::make(__('price'), 'price')
,
            Column::make(__('payment_type_id'), 'payment_type_id')
,
            Column::make(__('price_currency_id'), 'price_currency_id')
,
            Column::make(__('price_currency_exchange_rate'), 'price_currency_exchange_rate')
,
            Column::make(__('collection_amount'), 'collection_amount')
,
            Column::make(__('collection_type_id'), 'collection_type_id')
,
            Column::make(__('collection_currency_id'), 'collection_currency_id')
,
            Column::make(__('collection_currency_exchange_rate'), 'collection_currency_exchange_rate')
,
            Column::make(__('comment_id'), 'comment_id')
,
            Column::make(__('important_comment_text'), 'important_comment_text')
,
            Column::make(__('comments_count'), 'comments_count')
,
            Column::make(__('allow_receiver_contact'), 'allow_receiver_contact')
,
            Column::make(__('send_receiver_msg'), 'send_receiver_msg')
,
            Column::make(__('car_needed'), 'car_needed')
,
            Column::make(__('settled_with_wakilni'), 'settled_with_wakilni')
,
            Column::make(__('settled_with_customer'), 'settled_with_customer')
,
            Column::make(__('active'), 'active')
,
            Column::make(__('is_critical'), 'is_critical')
,
            Column::make(__('require_signature'), 'require_signature')
,
            Column::make(__('require_picture'), 'require_picture')
,
            Column::make(__('same_package'), 'same_package')
,
            Column::make(__('piggy_bank_submission_id'), 'piggy_bank_submission_id')
,
            Column::make(__('completed_on'), 'completed_on')
,
            Column::make(__('status_updated_at'), 'status_updated_at')
,
            Column::make(__('become_critical_date'), 'become_critical_date')
,
            Column::make(__('confirmed_at'), 'confirmed_at')
,
            Column::make(__('note'), 'note')
,
            Column::make(__('preferred_sender_date'), 'preferred_sender_date')
,
            Column::make(__('preferred_sender_from_time'), 'preferred_sender_from_time')
,
            Column::make(__('preferred_sender_to_time'), 'preferred_sender_to_time')
,
            Column::make(__('preferred_receiver_date'), 'preferred_receiver_date')
,
            Column::make(__('preferred_receiver_from_time'), 'preferred_receiver_from_time')
,
            Column::make(__('preferred_receiver_to_time'), 'preferred_receiver_to_time')
,
            Column::make(__('senderable_id'), 'senderable_id')
,
            Column::make(__('senderable_type'), 'senderable_type')
,
            Column::make(__('senderable_name'), 'senderable_name')
,
            Column::make(__('senderable_phone_number'), 'senderable_phone_number')
,
            Column::make(__('senderable_secondary_phone_number'), 'senderable_secondary_phone_number')
,
            Column::make(__('receiverable_id'), 'receiverable_id')
,
            Column::make(__('receiverable_type'), 'receiverable_type')
,
            Column::make(__('receiverable_name'), 'receiverable_name')
,
            Column::make(__('receiverable_phone_number'), 'receiverable_phone_number')
,
            Column::make(__('receiverable_secondary_phone_number'), 'receiverable_secondary_phone_number')
,
            Column::make(__('sender_location_id'), 'sender_location_id')
,
            Column::make(__('sender_location_label'), 'sender_location_label')
,
            Column::make(__('sender_area_id'), 'sender_area_id')
,
            Column::make(__('sender_area_label'), 'sender_area_label')
,
            Column::make(__('sender_zone_id'), 'sender_zone_id')
,
            Column::make(__('sender_zone_label'), 'sender_zone_label')
,
            Column::make(__('receiver_location_id'), 'receiver_location_id')
,
            Column::make(__('receiver_location_label'), 'receiver_location_label')
,
            Column::make(__('receiver_area_id'), 'receiver_area_id')
,
            Column::make(__('receiver_area_label'), 'receiver_area_label')
,
            Column::make(__('receiver_zone_id'), 'receiver_zone_id')
,
            Column::make(__('receiver_zone_label'), 'receiver_zone_label')
,
            Column::make(__('task_scheduled_date'), 'task_scheduled_date')
,
            Column::make(__('task_scheduled_from_time'), 'task_scheduled_from_time')
,
            Column::make(__('task_scheduled_to_time'), 'task_scheduled_to_time')
,
            Column::make(__('task_driver_id'), 'task_driver_id')
,
            Column::make(__('task_driver_user_id'), 'task_driver_user_id')
,
            Column::make(__('task_driver_contact_id'), 'task_driver_contact_id')
,
            Column::make(__('task_driver_user_name'), 'task_driver_user_name')
,
            Column::make(__('task_driver_user_phone_number'), 'task_driver_user_phone_number')
,
            Column::make(__('task_driver_user_is_active'), 'task_driver_user_is_active')
,
            Column::make(__('last_task_driver_id'), 'last_task_driver_id')
,
            Column::make(__('last_task_driver_user_id'), 'last_task_driver_user_id')
,
            Column::make(__('last_task_driver_contact_id'), 'last_task_driver_contact_id')
,
            Column::make(__('last_task_driver_user_name'), 'last_task_driver_user_name')
,
            Column::make(__('last_task_driver_user_phone_number'), 'last_task_driver_user_phone_number')
,
            Column::make(__('last_task_driver_user_is_active'), 'last_task_driver_user_is_active')
,
            Column::make(__('packages'), 'packages')
,
            Column::make(__('customer_id'), 'customer_id')
,
            Column::make(__('customer_name'), 'customer_name')
,
            Column::make(__('customer_golden_rule'), 'customer_golden_rule')
,
            Column::make(__('customer_is_active'), 'customer_is_active')
,
            Column::make(__('customer_account_manager_id'), 'customer_account_manager_id')
,
            Column::make(__('customer_industry_id'), 'customer_industry_id')
,
            Column::make(__('customer_user_id'), 'customer_user_id')
,
            Column::make(__('customer_user_name'), 'customer_user_name')
,
            Column::make(__('piggy_bank_id'), 'piggy_bank_id')
,
            Column::make(__('store_id'), 'store_id')
,
            Column::make(__('app_token_id'), 'app_token_id')
,
            Column::make(__('app_ref_id'), 'app_ref_id')
,
            Column::make(__('fulfillment_id'), 'fulfillment_id')
,

            Column::make(__('Actions'))
                ->format(function (Flatorder $model) {
                    return view('backend.flat-order.includes.actions',  ['flatorder' => $model]);
                })
        ];
    }
}