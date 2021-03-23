<?php

namespace App\Domains\Migration\Http\Requests\Backend\Migration;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreMigrationRequest.
 */
class StoreMigrationRequest extends FormRequest
{
    /**
     * Determine if the migration is authorized to make this request.
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
            'migration'=>'required',
            'batch'=>'required',
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