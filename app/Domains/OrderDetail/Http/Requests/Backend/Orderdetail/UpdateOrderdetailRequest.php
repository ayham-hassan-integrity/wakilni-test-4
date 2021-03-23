<?php

namespace App\Domains\OrderDetail\Http\Requests\Backend\Orderdetail;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateOrderdetailRequest.
 */
class UpdateOrderdetailRequest extends FormRequest
{
    /**
     * Determine if the orderdetail is authorized to make this request.
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
            'collection_amount'=>'nullable',
            'note'=>'nullable',
            'preferred_sender_date'=>'nullable',
            'preferred_sender_from_time'=>'nullable',
            'preferred_sender_to_time'=>'nullable',
            'preferred_receiver_date'=>'nullable',
            'preferred_receiver_from_time'=>'nullable',
            'preferred_receiver_to_time'=>'nullable',
            'require_signature'=>'required',
            'require_picture'=>'required',
            'same_package'=>'required',
            'senderable_id'=>'nullable',
            'senderable_type'=>'nullable',
            'receiverable_id'=>'nullable',
            'receiverable_type'=>'nullable',
            'payment_type_id'=>'nullable',
            'cash_collection_type_id'=>'nullable',
            'customer_id'=>'nullable',
            'piggy_bank_id'=>'nullable',
            'type_id'=>'nullable',
            'sender_location_id'=>'nullable',
            'receiver_location_id'=>'nullable',
            'collection_currency'=>'nullable',
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