<?php

namespace App\Domains\PasswordReset\Http\Requests\Backend\Passwordreset;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StorePasswordresetRequest.
 */
class StorePasswordresetRequest extends FormRequest
{
    /**
     * Determine if the passwordreset is authorized to make this request.
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
            'email'=>'required',
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