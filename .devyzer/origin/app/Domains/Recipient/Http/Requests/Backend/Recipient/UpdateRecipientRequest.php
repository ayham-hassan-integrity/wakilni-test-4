<?php

namespace App\Domains\Recipient\Http\Requests\Backend\Recipient;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateRecipientRequest.
 */
class UpdateRecipientRequest extends FormRequest
{
    /**
     * Determine if the recipient is authorized to make this request.
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
            'first_name'=>'required',
            'last_name'=>'nullable',
            'phone_number'=>'nullable',
            'date_of_birth'=>'nullable',
            'gender'=>'required',
            'email'=>'nullable',
            'note'=>'nullable',
            'allow_driver_contact'=>'required',
            'viewer_id'=>'nullable',
            'contact_id'=>'nullable',
            'default_address_id'=>'nullable',
            'secondary_phone_number'=>'nullable',
            'app_token_id'=>'nullable',
            'app_ref_id'=>'nullable',
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