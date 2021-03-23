<?php

namespace App\Domains\Payment\Http\Requests\Backend\Payment;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StorePaymentRequest.
 */
class StorePaymentRequest extends FormRequest
{
    /**
     * Determine if the payment is authorized to make this request.
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
            'order_id'=>'nullable',
            'customer_id'=>'nullable',
            'piggy_bank_id'=>'nullable',
            'type_id'=>'nullable',
            'amount'=>'nullable',
            'currency_id'=>'nullable',
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
}