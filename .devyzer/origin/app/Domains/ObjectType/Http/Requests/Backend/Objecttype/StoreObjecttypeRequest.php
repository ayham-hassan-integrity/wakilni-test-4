<?php

namespace App\Domains\ObjectType\Http\Requests\Backend\Objecttype;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreObjecttypeRequest.
 */
class StoreObjecttypeRequest extends FormRequest
{
    /**
     * Determine if the objecttype is authorized to make this request.
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
            'type'=>'nullable',
            'label'=>'required',
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