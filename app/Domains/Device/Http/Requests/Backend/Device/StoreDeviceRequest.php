<?php

namespace App\Domains\Device\Http\Requests\Backend\Device;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreDeviceRequest.
 */
class StoreDeviceRequest extends FormRequest
{
    /**
     * Determine if the device is authorized to make this request.
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
            'user_id'=>'nullable',
            'type'=>'nullable',
            'token'=>'required',
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