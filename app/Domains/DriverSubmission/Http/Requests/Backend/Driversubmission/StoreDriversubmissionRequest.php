<?php

namespace App\Domains\DriverSubmission\Http\Requests\Backend\Driversubmission;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreDriversubmissionRequest.
 */
class StoreDriversubmissionRequest extends FormRequest
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
}