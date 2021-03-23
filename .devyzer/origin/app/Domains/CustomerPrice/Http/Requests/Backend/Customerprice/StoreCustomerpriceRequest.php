<?php

namespace App\Domains\CustomerPrice\Http\Requests\Backend\Customerprice;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreCustomerpriceRequest.
 */
class StoreCustomerpriceRequest extends FormRequest
{
    /**
     * Determine if the customerprice is authorized to make this request.
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
            'minimum_count'=>'nullable',
            'maximum_count'=>'nullable',
            'price'=>'nullable',
            'customer_id'=>'nullable',
            'from_zone_id'=>'nullable',
            'to_zone_id'=>'nullable',
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