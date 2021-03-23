<?php

namespace App\Domains\TelescopeEntryTag\Http\Requests\Backend\Telescopeentrytag;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreTelescopeentrytagRequest.
 */
class StoreTelescopeentrytagRequest extends FormRequest
{
    /**
     * Determine if the telescopeentrytag is authorized to make this request.
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
            'entry_uuid'=>'required',
            'tag'=>'required',
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