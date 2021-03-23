<?php

namespace App\Domains\Package\Http\Requests\Backend\Package;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StorePackageRequest.
 */
class StorePackageRequest extends FormRequest
{
    /**
     * Determine if the package is authorized to make this request.
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
            'quantity'=>'required',
            'trip_number'=>'required',
            'type_id'=>'nullable',
            'order_details_id'=>'nullable',
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