<?php

namespace App\Domains\DriverSubmission\Http\Requests\Backend\Driversubmission;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateDriversubmissionRequest.
 */
class UpdateDriversubmissionRequest extends FormRequest
{
    /**
     * Determine if the driversubmission is authorized to make this request.
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
            'goal_amount'=>'nullable',
            'note'=>'nullable',
            'status'=>'required',
            'driver_id'=>'nullable',
            'operator_note'=>'nullable',
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