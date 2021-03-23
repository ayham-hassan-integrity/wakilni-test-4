<?php

namespace App\Domains\ActivityLog\Http\Requests\Backend\Activitylog;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateActivitylogRequest.
 */
class UpdateActivitylogRequest extends FormRequest
{
    /**
     * Determine if the activitylog is authorized to make this request.
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
            'log_name'=>'nullable',
            'description'=>'required',
            'subject_id'=>'nullable',
            'subject_type'=>'nullable',
            'causer_id'=>'nullable',
            'causer_type'=>'nullable',
            'properties'=>'nullable',
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