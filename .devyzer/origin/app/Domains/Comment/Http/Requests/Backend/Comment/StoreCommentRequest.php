<?php

namespace App\Domains\Comment\Http\Requests\Backend\Comment;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreCommentRequest.
 */
class StoreCommentRequest extends FormRequest
{
    /**
     * Determine if the comment is authorized to make this request.
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
            'comment'=>'nullable',
            'is_public'=>'required',
            'order_id'=>'nullable',
            'user_id'=>'nullable',
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