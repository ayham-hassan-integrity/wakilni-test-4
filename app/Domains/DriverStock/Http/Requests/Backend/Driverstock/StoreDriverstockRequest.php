<?php

namespace App\Domains\DriverStock\Http\Requests\Backend\Driverstock;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreDriverstockRequest.
 */
class StoreDriverstockRequest extends FormRequest
{
    /**
     * Determine if the driverstock is authorized to make this request.
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
            'amount'=>'nullable',
            'stock_id'=>'nullable',
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