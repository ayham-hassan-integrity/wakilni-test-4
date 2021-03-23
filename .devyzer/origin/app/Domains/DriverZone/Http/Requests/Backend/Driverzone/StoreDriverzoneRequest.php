<?php

namespace App\Domains\DriverZone\Http\Requests\Backend\Driverzone;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreDriverzoneRequest.
 */
class StoreDriverzoneRequest extends FormRequest
{
    /**
     * Determine if the driverzone is authorized to make this request.
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
            'zone_id'=>'nullable',
            'driver_id'=>'nullable',
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