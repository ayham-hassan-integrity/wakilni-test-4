@extends('backend.layouts.app')

@section('title', __('View Customer'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Customer')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.customer.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $customer->id }}</td>
                </tr>
                <tr>
                    <th>@lang('golden_rule')</th>
                    <td>{{   $customer->golden_rule }}</td>
                </tr>
                <tr>
                    <th>@lang('mof')</th>
                    <td>{{   $customer->mof }}</td>
                </tr>
                <tr>
                    <th>@lang('vat')</th>
                    <td>{{   $customer->vat }}</td>
                </tr>
                <tr>
                    <th>@lang('accounting_ref')</th>
                    <td>{{   $customer->accounting_ref }}</td>
                </tr>
                <tr>
                    <th>@lang('discount')</th>
                    <td>{{   $customer->discount }}</td>
                </tr>
                <tr>
                    <th>@lang('quality_check')</th>
                    <td>{{   $customer->quality_check }}</td>
                </tr>
                <tr>
                    <th>@lang('note')</th>
                    <td>{{   $customer->note }}</td>
                </tr>
                <tr>
                    <th>@lang('inhouse_note')</th>
                    <td>{{   $customer->inhouse_note }}</td>
                </tr>
                <tr>
                    <th>@lang('submit_account_date')</th>
                    <td>{{   $customer->submit_account_date }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $customer->type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('payment_method')</th>
                    <td>{{   $customer->payment_method }}</td>
                </tr>
                <tr>
                    <th>@lang('subscription_type')</th>
                    <td>{{   $customer->subscription_type }}</td>
                </tr>
                <tr>
                    <th>@lang('is_active')</th>
                    <td>{{   $customer->is_active }}</td>
                </tr>
                <tr>
                    <th>@lang('deactivate_reason')</th>
                    <td>{{   $customer->deactivate_reason }}</td>
                </tr>
                <tr>
                    <th>@lang('shop_name')</th>
                    <td>{{   $customer->shop_name }}</td>
                </tr>
                <tr>
                    <th>@lang('name')</th>
                    <td>{{   $customer->name }}</td>
                </tr>
                <tr>
                    <th>@lang('default_address_id')</th>
                    <td>{{   $customer->default_address_id }}</td>
                </tr>
                <tr>
                    <th>@lang('waybill')</th>
                    <td>{{   $customer->waybill }}</td>
                </tr>
                <tr>
                    <th>@lang('phone_number')</th>
                    <td>{{   $customer->phone_number }}</td>
                </tr>
                <tr>
                    <th>@lang('email_notifications')</th>
                    <td>{{   $customer->email_notifications }}</td>
                </tr>
                <tr>
                    <th>@lang('sms_notifications')</th>
                    <td>{{   $customer->sms_notifications }}</td>
                </tr>
                <tr>
                    <th>@lang('account_manager_id')</th>
                    <td>{{   $customer->account_manager_id }}</td>
                </tr>
                <tr>
                    <th>@lang('industry_id')</th>
                    <td>{{   $customer->industry_id }}</td>
                </tr>
                <tr>
                    <th>@lang('logo')</th>
                    <td>{{   $customer->logo }}</td>
                </tr>
                <tr>
                    <th>@lang('online_platform')</th>
                    <td>{{   $customer->online_platform }}</td>
                </tr>
                <tr>
                    <th>@lang('established_year')</th>
                    <td>{{   $customer->established_year }}</td>
                </tr>
                <tr>
                    <th>@lang('is_product_delicate')</th>
                    <td>{{   $customer->is_product_delicate }}</td>
                </tr>
                <tr>
                    <th>@lang('require_bigger_car')</th>
                    <td>{{   $customer->require_bigger_car }}</td>
                </tr>
                <tr>
                    <th>@lang('pickup_preference')</th>
                    <td>{{   $customer->pickup_preference }}</td>
                </tr>
                <tr>
                    <th>@lang('orders_per_month')</th>
                    <td>{{   $customer->orders_per_month }}</td>
                </tr>
                <tr>
                    <th>@lang('order_average_value')</th>
                    <td>{{   $customer->order_average_value }}</td>
                </tr>
                <tr>
                    <th>@lang('return_products')</th>
                    <td>{{   $customer->return_products }}</td>
                </tr>
                <tr>
                    <th>@lang('beneficiary_name')</th>
                    <td>{{   $customer->beneficiary_name }}</td>
                </tr>
                <tr>
                    <th>@lang('official_invoice_needed')</th>
                    <td>{{   $customer->official_invoice_needed }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Customer Created'):</strong> @displayDate($customer->created_at) ({{   $customer->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($customer->updated_at) ({{   $customer->updated_at->diffForHumans() }})

                @if($customer->trashed())
                    <strong>@lang('Customer Deleted'):</strong> @displayDate($customer->deleted_at) ({{   $customer->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection