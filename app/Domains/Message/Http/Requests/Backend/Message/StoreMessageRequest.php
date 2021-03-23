<?php

namespace App\Domains\Message\Http\Requests\Backend\Message;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreMessageRequest.
 */
class StoreMessageRequest extends FormRequest
{
    /**
     * Determine if the message is authorized to make this request.
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
            'title'=>'nullable',
            'message'=>'nullable',
            'status'=>'required',
            'receiver_id'=>'nullable',
            'sender_id'=>'nullable',
            'content_type_id'=>'nullable',
            'type_id'=>'nullable',
            'location_id'=>'nullable',
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