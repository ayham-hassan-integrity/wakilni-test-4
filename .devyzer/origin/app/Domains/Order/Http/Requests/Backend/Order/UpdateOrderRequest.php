<?php

namespace App\Domains\Order\Http\Requests\Backend\Order;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateOrderRequest.
 */
class UpdateOrderRequest extends FormRequest
{
    /**
     * Determine if the order is authorized to make this request.
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
            'rate'=>'nullable',
            'completed_on'=>'nullable',
            'payment_status'=>'required',
            'package_status'=>'required',
            'status'=>'required',
            'status_updated_at'=>'nullable',
            'remaining_balance'=>'nullable',
            'price'=>'nullable',
            'parent_id'=>'nullable',
            'order_details_id'=>'nullable',
            'comment_id'=>'nullable',
            'waybill'=>'nullable',
            'allow_receiver_contact'=>'required',
            'send_receiver_msg'=>'required',
            'car_needed'=>'required',
            'settled_with_wakilni'=>'required',
            'settled_with_customer'=>'required',
            'piggy_bank_submission_id'=>'nullable',
            'active'=>'required',
            'is_critical'=>'required',
            'become_critical_date'=>'nullable',
            'confirmed_at'=>'nullable',
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