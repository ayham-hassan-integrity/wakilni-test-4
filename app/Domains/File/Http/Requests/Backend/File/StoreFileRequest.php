<?php

namespace App\Domains\File\Http\Requests\Backend\File;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreFileRequest.
 */
class StoreFileRequest extends FormRequest
{
    /**
     * Determine if the file is authorized to make this request.
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
            'mime'=>'required',
            'filename'=>'required',
            'size'=>'required',
            'storage_path'=>'required',
            'disk'=>'required',
            'status'=>'required',
            'fileable_id'=>'nullable',
            'fileable_type'=>'nullable',
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