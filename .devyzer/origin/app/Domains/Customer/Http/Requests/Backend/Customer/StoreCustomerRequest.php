<?php

namespace App\Domains\Customer\Http\Requests\Backend\Customer;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreCustomerRequest.
 */
class StoreCustomerRequest extends FormRequest
{
    /**
     * Determine if the customer is authorized to make this request.
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
            'golden_rule'=>'nullable',
            'mof'=>'nullable',
            'vat'=>'nullable',
            'accounting_ref'=>'nullable',
            'discount'=>'nullable',
            'quality_check'=>'nullable',
            'note'=>'nullable',
            'inhouse_note'=>'nullable',
            'submit_account_date'=>'nullable',
            'type_id'=>'nullable',
            'payment_method'=>'nullable',
            'subscription_type'=>'nullable',
            'is_active'=>'required',
            'deactivate_reason'=>'nullable',
            'shop_name'=>'nullable',
            'name'=>'nullable',
            'default_address_id'=>'nullable',
            'waybill'=>'nullable',
            'phone_number'=>'nullable',
            'email_notifications'=>'required',
            'sms_notifications'=>'required',
            'account_manager_id'=>'nullable',
            'industry_id'=>'nullable',
            'logo'=>'nullable',
            'online_platform'=>'nullable',
            'established_year'=>'nullable',
            'is_product_delicate'=>'nullable',
            'require_bigger_car'=>'nullable',
            'pickup_preference'=>'nullable',
            'orders_per_month'=>'nullable',
            'order_average_value'=>'nullable',
            'return_products'=>'nullable',
            'beneficiary_name'=>'nullable',
            'official_invoice_needed'=>'nullable',
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