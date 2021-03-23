<?php

namespace App\Domains\CustomerCurrency\Http\Requests\Backend\Customercurrency;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreCustomercurrencyRequest.
 */
class StoreCustomercurrencyRequest extends FormRequest
{
    /**
     * Determine if the customercurrency is authorized to make this request.
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
            'customer_id'=>'nullable',
            'currency_id'=>'nullable',
            'exchange_rate'=>'nullable',
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