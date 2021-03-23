<?php

namespace App\Domains\TimeSheet\Http\Requests\Backend\Timesheet;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreTimesheetRequest.
 */
class StoreTimesheetRequest extends FormRequest
{
    /**
     * Determine if the timesheet is authorized to make this request.
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
            'from'=>'required',
            'to'=>'nullable',
            'note'=>'nullable',
            'user_id'=>'nullable',
            'status'=>'nullable',
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