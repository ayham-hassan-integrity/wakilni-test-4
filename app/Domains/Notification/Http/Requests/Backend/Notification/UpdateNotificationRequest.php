<?php

namespace App\Domains\Notification\Http\Requests\Backend\Notification;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateNotificationRequest.
 */
class UpdateNotificationRequest extends FormRequest
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

    /**
     * Handle a failed authorization attempt.
     *
     * @return void
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    protected function failedAuthorization()
    {
        throw new AuthorizationException(__('You can not update this record.'));
    }
}