<?php

namespace App\Domains\AppToken\Http\Requests\Backend\Apptoken;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreApptokenRequest.
 */
class StoreApptokenRequest extends FormRequest
{
    /**
     * Determine if the apptoken is authorized to make this request.
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
            'shop'=>'required',
            'access_token'=>'nullable',
            'customer_id'=>'nullable',
            'app_id'=>'nullable',
            'location_id'=>'nullable',
            'code'=>'nullable',
            'authenticated'=>'required',
            'remember_token'=>'nullable',
            'country_code'=>'nullable',
            'extra'=>'nullable',
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