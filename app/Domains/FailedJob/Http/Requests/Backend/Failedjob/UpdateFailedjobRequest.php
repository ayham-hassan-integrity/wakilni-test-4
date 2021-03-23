<?php

namespace App\Domains\FailedJob\Http\Requests\Backend\Failedjob;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateFailedjobRequest.
 */
class UpdateFailedjobRequest extends FormRequest
{
    /**
     * Determine if the failedjob is authorized to make this request.
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
            'connection'=>'required',
            'queue'=>'required',
            'payload'=>'required',
            'exception'=>'required',
            'failed_at'=>'required',
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