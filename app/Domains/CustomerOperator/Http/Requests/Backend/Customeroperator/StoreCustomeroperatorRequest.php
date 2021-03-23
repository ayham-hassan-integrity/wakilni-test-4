<?php

namespace App\Domains\CustomerOperator\Http\Requests\Backend\Customeroperator;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreCustomeroperatorRequest.
 */
class StoreCustomeroperatorRequest extends FormRequest
{
    /**
     * Determine if the customeroperator is authorized to make this request.
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
            'operator_id'=>'nullable',
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