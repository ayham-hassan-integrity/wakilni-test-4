<?php

namespace App\Domains\TelescopeEntry\Http\Requests\Backend\Telescopeentry;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreTelescopeentryRequest.
 */
class StoreTelescopeentryRequest extends FormRequest
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
}