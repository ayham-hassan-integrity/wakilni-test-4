<?php

namespace App\Domains\Route\Http\Requests\Backend\Route;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreRouteRequest.
 */
class StoreRouteRequest extends FormRequest
{
    /**
     * Determine if the route is authorized to make this request.
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
            'route'=>'required',
            'km/day'=>'nullable',
            'today'=>'nullable',
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