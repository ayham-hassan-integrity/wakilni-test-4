<?php

namespace App\Domains\Currency\Http\Requests\Backend\Currency;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreCurrencyRequest.
 */
class StoreCurrencyRequest extends FormRequest
{
    /**
     * Determine if the currency is authorized to make this request.
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
            'title'=>'required',
            'symbol_left'=>'nullable',
            'symbol_right'=>'nullable',
            'code'=>'required',
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