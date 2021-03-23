<?php

namespace App\Domains\Setting\Http\Requests\Backend\Setting;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreSettingRequest.
 */
class StoreSettingRequest extends FormRequest
{
    /**
     * Determine if the setting is authorized to make this request.
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