<?php

namespace App\Domains\Recipient\Http\Requests\Backend\Recipient;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreRecipientRequest.
 */
class StoreRecipientRequest extends FormRequest
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
}