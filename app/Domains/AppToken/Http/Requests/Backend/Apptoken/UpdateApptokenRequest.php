<?php

namespace App\Domains\AppToken\Http\Requests\Backend\Apptoken;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateApptokenRequest.
 */
class UpdateApptokenRequest extends FormRequest
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