<?php

namespace App\Domains\User\Http\Requests\Backend\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreUserRequest.
 */
class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            'email'=>'nullable',
            'phone_number'=>'nullable',
            'password'=>'required',
            'pattern'=>'nullable',
            'start_date'=>'required',
            'office_id'=>'nullable',
            'remember_token'=>'nullable',
            'contact_id'=>'nullable',
            'customer_id'=>'nullable',
            'last_login'=>'nullable',
            'is_active'=>'required',
            'language_type'=>'nullable',
            'time_zone'=>'required',
            'provider_name'=>'nullable',
            'provider_token'=>'nullable',
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