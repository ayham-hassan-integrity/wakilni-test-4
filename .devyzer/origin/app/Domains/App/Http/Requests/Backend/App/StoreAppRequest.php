<?php

namespace App\Domains\App\Http\Requests\Backend\App;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreAppRequest.
 */
class StoreAppRequest extends FormRequest
{
    /**
     * Determine if the app is authorized to make this request.
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
            'name'=>'required',
            'public'=>'required',
            'client_id'=>'nullable',
            'client_secret'=>'nullable',
            'random_authentication'=>'required',
            'in_house_development'=>'required',
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