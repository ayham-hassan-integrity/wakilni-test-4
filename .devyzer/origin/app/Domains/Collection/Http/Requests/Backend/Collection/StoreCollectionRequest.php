<?php

namespace App\Domains\Collection\Http\Requests\Backend\Collection;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreCollectionRequest.
 */
class StoreCollectionRequest extends FormRequest
{
    /**
     * Determine if the collection is authorized to make this request.
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
            'amount'=>'required',
            'task_id'=>'nullable',
            'type_id'=>'nullable',
            'currency_id'=>'nullable',
            'order_id'=>'nullable',
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