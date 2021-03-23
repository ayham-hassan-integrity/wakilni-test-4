<?php

namespace App\Domains\Location\Http\Requests\Backend\Location;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreLocationRequest.
 */
class StoreLocationRequest extends FormRequest
{
    /**
     * Determine if the location is authorized to make this request.
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
            'building'=>'nullable',
            'floor'=>'nullable',
            'directions'=>'nullable',
            'longitude'=>'nullable',
            'latitude'=>'nullable',
            'area_id'=>'nullable',
            'personable_id'=>'nullable',
            'personable_type'=>'nullable',
            'type_id'=>'nullable',
            'is_active'=>'required',
            'image_id'=>'nullable',
            'app_token_id'=>'nullable',
            'app_ref_id'=>'nullable',
            'voice'=>'nullable',
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