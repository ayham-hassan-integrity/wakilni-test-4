<?php

namespace App\Domains\Office\Http\Requests\Backend\Office;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreOfficeRequest.
 */
class StoreOfficeRequest extends FormRequest
{
    /**
     * Determine if the office is authorized to make this request.
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
            'name'=>'required',
            'area'=>'required',
            'store_id'=>'nullable',
            'phone_number'=>'nullable',
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