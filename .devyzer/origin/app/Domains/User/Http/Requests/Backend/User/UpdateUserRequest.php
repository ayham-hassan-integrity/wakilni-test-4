<?php

namespace App\Domains\User\Http\Requests\Backend\User;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateUserRequest.
 */
class UpdateUserRequest extends FormRequest
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

    /**
     * Handle a failed authorization attempt.
     *
     * @return void
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    protected function failedAuthorization()
    {
        throw new AuthorizationException(__('You can not update this record.'));
    }
}