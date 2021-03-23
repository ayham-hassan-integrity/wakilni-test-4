<?php

namespace App\Domains\Amount\Http\Requests\Backend\Amount;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreAmountRequest.
 */
class StoreAmountRequest extends FormRequest
{
    /**
     * Determine if the amount is authorized to make this request.
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
            'amount'=>'nullable',
            'piggy_bank_id'=>'nullable',
            'type_id'=>'nullable',
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