<?php

namespace App\Domains\TimeZone\Http\Requests\Backend\Timezone;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreTimezoneRequest.
 */
class StoreTimezoneRequest extends FormRequest
{
    /**
     * Determine if the timezone is authorized to make this request.
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
            'zone'=>'required',
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