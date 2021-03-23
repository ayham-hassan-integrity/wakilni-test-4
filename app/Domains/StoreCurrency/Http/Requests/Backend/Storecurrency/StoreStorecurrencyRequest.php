<?php

namespace App\Domains\StoreCurrency\Http\Requests\Backend\Storecurrency;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreStorecurrencyRequest.
 */
class StoreStorecurrencyRequest extends FormRequest
{
    /**
     * Determine if the storecurrency is authorized to make this request.
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
            'store_id'=>'nullable',
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