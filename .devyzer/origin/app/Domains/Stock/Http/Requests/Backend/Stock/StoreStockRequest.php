<?php

namespace App\Domains\Stock\Http\Requests\Backend\Stock;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreStockRequest.
 */
class StoreStockRequest extends FormRequest
{
    /**
     * Determine if the stock is authorized to make this request.
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
            'label'=>'nullable',
            'amount'=>'nullable',
            'type_id'=>'nullable',
            'size_id'=>'nullable',
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