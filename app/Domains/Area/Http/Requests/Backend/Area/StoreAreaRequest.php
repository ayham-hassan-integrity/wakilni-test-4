<?php

namespace App\Domains\Area\Http\Requests\Backend\Area;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreAreaRequest.
 */
class StoreAreaRequest extends FormRequest
{
    /**
     * Determine if the area is authorized to make this request.
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
            'zone_id'=>'nullable',
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