<?php

namespace App\Domains\Store\Http\Requests\Backend\Store;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreStoreRequest.
 */
class StoreStoreRequest extends FormRequest
{
    /**
     * Determine if the store is authorized to make this request.
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
            'prefix'=>'required',
            'area'=>'required',
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