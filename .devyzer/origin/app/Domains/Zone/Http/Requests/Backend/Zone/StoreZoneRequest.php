<?php

namespace App\Domains\Zone\Http\Requests\Backend\Zone;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreZoneRequest.
 */
class StoreZoneRequest extends FormRequest
{
    /**
     * Determine if the zone is authorized to make this request.
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
            'area'=>'required',
            'store_id'=>'nullable',
            'description'=>'nullable',
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