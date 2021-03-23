<?php

namespace App\Domains\ModelHaRole\Http\Requests\Backend\Modelharole;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreModelharoleRequest.
 */
class StoreModelharoleRequest extends FormRequest
{
    /**
     * Determine if the modelharole is authorized to make this request.
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
            'role_id'=>'required',
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