<?php

namespace App\Domains\Review\Http\Requests\Backend\Review;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateReviewRequest.
 */
class UpdateReviewRequest extends FormRequest
{
    /**
     * Determine if the review is authorized to make this request.
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
            'order_id'=>'nullable',
            'customer_id'=>'nullable',
            'recipient_id'=>'nullable',
            'rate'=>'required',
            'feedback_message'=>'nullable',
            'viewed'=>'required',
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