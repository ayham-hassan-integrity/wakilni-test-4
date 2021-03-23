<?php

namespace App\Domains\FlatOrder\Http\Requests\Backend\Flatorder;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateFlatorderRequest.
 */
class UpdateFlatorderRequest extends FormRequest
{
    /**
     * Determine if the flatorder is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'order_number'=>'required',
            'waybill'=>'nullable',
            'parent_id'=>'nullable',
            'order_id'=>'nullable',
            'order_details_id'=>'nullable',
            'type_id'=>'nullable',
            'rate'=>'nullable',
            'status'=>'required',
            'payment_status'=>'required',
            'package_status'=>'required',
            'remaining_balance'=>'nullable',
            'price'=>'nullable',
            'payment_type_id'=>'nullable',
            'price_currency_id'=>'nullable',
            'price_currency_exchange_rate'=>'nullable',
            'collection_amount'=>'nullable',
            'collection_type_id'=>'nullable',
            'collection_currency_id'=>'nullable',
            'collection_currency_exchange_rate'=>'nullable',
            'comment_id'=>'nullable',
            'important_comment_text'=>'nullable',
            'comments_count'=>'required',
            'allow_receiver_contact'=>'required',
            'send_receiver_msg'=>'required',
            'car_needed'=>'required',
            'settled_with_wakilni'=>'required',
            'settled_with_customer'=>'required',
            'active'=>'required',
            'is_critical'=>'required',
            'require_signature'=>'required',
            'require_picture'=>'required',
            'same_package'=>'required',
            'piggy_bank_submission_id'=>'nullable',
            'completed_on'=>'nullable',
            'status_updated_at'=>'nullable',
            'become_critical_date'=>'nullable',
            'confirmed_at'=>'nullable',
            'note'=>'nullable',
            'preferred_sender_date'=>'nullable',
            'preferred_sender_from_time'=>'nullable',
            'preferred_sender_to_time'=>'nullable',
            'preferred_receiver_date'=>'nullable',
            'preferred_receiver_from_time'=>'nullable',
            'preferred_receiver_to_time'=>'nullable',
            'senderable_id'=>'nullable',
            'senderable_type'=>'nullable',
            'senderable_name'=>'nullable',
            'senderable_phone_number'=>'nullable',
            'senderable_secondary_phone_number'=>'nullable',
            'receiverable_id'=>'nullable',
            'receiverable_type'=>'nullable',
            'receiverable_name'=>'nullable',
            'receiverable_phone_number'=>'nullable',
            'receiverable_secondary_phone_number'=>'nullable',
            'sender_location_id'=>'nullable',
            'sender_location_label'=>'nullable',
            'sender_area_id'=>'nullable',
            'sender_area_label'=>'nullable',
            'sender_zone_id'=>'nullable',
            'sender_zone_label'=>'nullable',
            'receiver_location_id'=>'nullable',
            'receiver_location_label'=>'nullable',
            'receiver_area_id'=>'nullable',
            'receiver_area_label'=>'nullable',
            'receiver_zone_id'=>'nullable',
            'receiver_zone_label'=>'nullable',
            'task_scheduled_date'=>'nullable',
            'task_scheduled_from_time'=>'nullable',
            'task_scheduled_to_time'=>'nullable',
            'task_driver_id'=>'nullable',
            'task_driver_user_id'=>'nullable',
            'task_driver_contact_id'=>'nullable',
            'task_driver_user_name'=>'nullable',
            'task_driver_user_phone_number'=>'nullable',
            'task_driver_user_is_active'=>'required',
            'last_task_driver_id'=>'nullable',
            'last_task_driver_user_id'=>'nullable',
            'last_task_driver_contact_id'=>'nullable',
            'last_task_driver_user_name'=>'nullable',
            'last_task_driver_user_phone_number'=>'nullable',
            'last_task_driver_user_is_active'=>'required',
            'packages'=>'nullable',
            'customer_id'=>'nullable',
            'customer_name'=>'nullable',
            'customer_golden_rule'=>'nullable',
            'customer_is_active'=>'required',
            'customer_account_manager_id'=>'nullable',
            'customer_industry_id'=>'nullable',
            'customer_user_id'=>'nullable',
            'customer_user_name'=>'nullable',
            'piggy_bank_id'=>'nullable',
            'store_id'=>'nullable',
            'app_token_id'=>'nullable',
            'app_ref_id'=>'nullable',
            'fulfillment_id'=>'nullable',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }

    /**
     * Handle a failed authorization attempt.
     *
     * @return void
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    protected function failedAuthorization()
    {
        throw new AuthorizationException(__('You can not update this record.'));
    }
}