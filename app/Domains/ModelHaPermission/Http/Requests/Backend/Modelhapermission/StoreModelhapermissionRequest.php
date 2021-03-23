<?php

namespace App\Domains\ModelHaPermission\Http\Requests\Backend\Modelhapermission;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreModelhapermissionRequest.
 */
class StoreModelhapermissionRequest extends FormRequest
{
    /**
     * Determine if the modelhapermission is authorized to make this request.
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
            'permission_id'=>'required',
            'model_id'=>'required',
            'model_type'=>'required',
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