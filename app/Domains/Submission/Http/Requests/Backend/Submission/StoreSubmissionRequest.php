<?php

namespace App\Domains\Submission\Http\Requests\Backend\Submission;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreSubmissionRequest.
 */
class StoreSubmissionRequest extends FormRequest
{
    /**
     * Determine if the submission is authorized to make this request.
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
            'amount'=>'nullable',
            'corrected_amount'=>'nullable',
            'type_id'=>'nullable',
            'driver_submission_id'=>'nullable',
            'currency_id'=>'nullable',
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