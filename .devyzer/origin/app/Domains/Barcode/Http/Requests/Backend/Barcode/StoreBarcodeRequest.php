<?php

namespace App\Domains\Barcode\Http\Requests\Backend\Barcode;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreBarcodeRequest.
 */
class StoreBarcodeRequest extends FormRequest
{
    /**
     * Determine if the barcode is authorized to make this request.
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
            'status'=>'required',
            'barcode_order_number'=>'required',
            'pickup_order_id'=>'nullable',
            'pickup_task_id'=>'nullable',
            'pickup_driver_id'=>'nullable',
            'delivery_order_id'=>'nullable',
            'customer_id'=>'nullable',
            'scanned_at'=>'nullable',
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