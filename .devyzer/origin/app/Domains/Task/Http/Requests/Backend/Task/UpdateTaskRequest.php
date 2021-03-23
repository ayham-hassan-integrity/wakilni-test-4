<?php

namespace App\Domains\Task\Http\Requests\Backend\Task;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateTaskRequest.
 */
class UpdateTaskRequest extends FormRequest
{
    /**
     * Determine if the task is authorized to make this request.
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
            'sequence'=>'required',
            'overall_sequence'=>'nullable',
            'deliver_amount'=>'nullable',
            'receive_amount'=>'nullable',
            'deliver_package'=>'nullable',
            'receive_package'=>'nullable',
            'note'=>'nullable',
            'fail_reason'=>'nullable',
            'collection_note'=>'nullable',
            'preferred_date'=>'nullable',
            'preferred_from_time'=>'nullable',
            'preferred_to_time'=>'nullable',
            'collection_date'=>'nullable',
            'require_signature'=>'required',
            'status'=>'required',
            'submitted'=>'required',
            'secured'=>'nullable',
            'receiverable_id'=>'nullable',
            'receiverable_type'=>'nullable',
            'order_id'=>'nullable',
            'location_id'=>'nullable',
            'driver_id'=>'nullable',
            'type_id'=>'nullable',
            'customer_id'=>'nullable',
            'store_id'=>'nullable',
            'require_picture'=>'required',
            'picture_id'=>'nullable',
            'signature_id'=>'nullable',
            'driver_submission_id'=>'nullable',
            'piggy_bank_id'=>'nullable',
            'vehicle_id'=>'nullable',
            'receive_price'=>'nullable',
            'deliver_amount_currency_rate'=>'nullable',
            'receive_amount_currency_rate'=>'nullable',
            'amount_currency'=>'nullable',
            'price_currency'=>'nullable',
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