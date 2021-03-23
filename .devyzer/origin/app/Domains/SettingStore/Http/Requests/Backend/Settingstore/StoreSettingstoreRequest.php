<?php

namespace App\Domains\SettingStore\Http\Requests\Backend\Settingstore;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreSettingstoreRequest.
 */
class StoreSettingstoreRequest extends FormRequest
{
    /**
     * Determine if the settingstore is authorized to make this request.
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
            'store_id'=>'nullable',
            'setting_id'=>'nullable',
            'value'=>'nullable',
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