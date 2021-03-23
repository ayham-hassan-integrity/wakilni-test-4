<?php

namespace App\Domains\PiggyBank\Http\Requests\Backend\Piggybank;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StorePiggybankRequest.
 */
class StorePiggybankRequest extends FormRequest
{
    /**
     * Determine if the piggybank is authorized to make this request.
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
            'note'=>'nullable',
            'start_date'=>'nullable',
            'end_date'=>'nullable',
            'status'=>'required',
            'customer_id'=>'nullable',
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