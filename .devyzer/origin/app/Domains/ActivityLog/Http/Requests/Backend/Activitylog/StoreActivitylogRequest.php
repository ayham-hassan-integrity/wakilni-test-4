<?php

namespace App\Domains\ActivityLog\Http\Requests\Backend\Activitylog;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreActivitylogRequest.
 */
class StoreActivitylogRequest extends FormRequest
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
}