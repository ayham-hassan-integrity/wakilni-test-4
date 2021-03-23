<?php

namespace App\Domains\TelescopeMonitoring\Http\Requests\Backend\Telescopemonitoring;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreTelescopemonitoringRequest.
 */
class StoreTelescopemonitoringRequest extends FormRequest
{
    /**
     * Determine if the telescopemonitoring is authorized to make this request.
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