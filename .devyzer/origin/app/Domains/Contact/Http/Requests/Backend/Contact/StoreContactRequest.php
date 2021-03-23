<?php

namespace App\Domains\Contact\Http\Requests\Backend\Contact;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreContactRequest.
 */
class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the contact is authorized to make this request.
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
            'phone_number'=>'required',
            'date_of_birth'=>'nullable',
            'gender'=>'required',
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