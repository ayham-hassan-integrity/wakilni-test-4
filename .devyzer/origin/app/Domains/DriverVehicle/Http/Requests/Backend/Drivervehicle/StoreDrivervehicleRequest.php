<?php

namespace App\Domains\DriverVehicle\Http\Requests\Backend\Drivervehicle;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreDrivervehicleRequest.
 */
class StoreDrivervehicleRequest extends FormRequest
{
    /**
     * Determine if the drivervehicle is authorized to make this request.
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
            'vehicle_id'=>'nullable',
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