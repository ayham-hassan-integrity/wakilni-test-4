<?php

namespace App\Domains\LocationLog\Http\Requests\Backend\Locationlog;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreLocationlogRequest.
 */
class StoreLocationlogRequest extends FormRequest
{
    /**
     * Determine if the locationlog is authorized to make this request.
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
            'data'=>'nullable',
            'location_id'=>'nullable',
            'driver_id'=>'nullable',
            'type_id'=>'nullable',
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