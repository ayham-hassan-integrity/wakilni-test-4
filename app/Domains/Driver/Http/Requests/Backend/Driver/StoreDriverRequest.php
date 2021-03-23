<?php

namespace App\Domains\Driver\Http\Requests\Backend\Driver;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreDriverRequest.
 */
class StoreDriverRequest extends FormRequest
{
    /**
     * Determine if the driver is authorized to make this request.
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
            'nationality'=>'nullable',
            'color'=>'nullable',
            'has_gps'=>'required',
            'has_internet'=>'required',
            'status'=>'required',
            'user_id'=>'nullable',
            'type_id'=>'nullable',
            'now_driving'=>'nullable',
            'is_active'=>'required',
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