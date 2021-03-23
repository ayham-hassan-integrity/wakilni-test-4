<?php

namespace App\Domains\TelescopeEntry\Http\Requests\Backend\Telescopeentry;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateTelescopeentryRequest.
 */
class UpdateTelescopeentryRequest extends FormRequest
{
    /**
     * Determine if the telescopeentry is authorized to make this request.
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
            'sequence'=>'required',
            'uuid'=>'required',
            'batch_id'=>'required',
            'family_hash'=>'nullable',
            'should_display_on_index'=>'required',
            'type'=>'required',
            'content'=>'required',
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