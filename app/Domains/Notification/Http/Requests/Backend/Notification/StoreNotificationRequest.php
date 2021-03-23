<?php

namespace App\Domains\Notification\Http\Requests\Backend\Notification;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreNotificationRequest.
 */
class StoreNotificationRequest extends FormRequest
{
    /**
     * Determine if the notification is authorized to make this request.
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
            'type_id'=>'required',
            'notifiable_id'=>'nullable',
            'notifiable_type'=>'nullable',
            'data'=>'required',
            'read_at'=>'nullable',
            'objectable_id'=>'nullable',
            'objectable_type'=>'nullable',
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