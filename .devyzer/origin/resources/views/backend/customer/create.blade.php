@extends('backend.layouts.app')

@section('title', __('Create Customer'))

@section('content')
    <x-forms.post :action="route('admin.customer.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Customer')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.customer.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="golden_rule" class="col-md-2 col-form-label">@lang('golden_rule')</label>

                    <div class="col-md-10">
                        <input type="text" name="golden_rule" class="form-control" placeholder="{{  __('golden_rule') }} " value="{{  old('golden_rule') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="mof" class="col-md-2 col-form-label">@lang('mof')</label>

                    <div class="col-md-10">
                        <input type="text" name="mof" class="form-control" placeholder="{{  __('mof') }} " value="{{  old('mof') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="vat" class="col-md-2 col-form-label">@lang('vat')</label>

                    <div class="col-md-10">
                        <input type="text" name="vat" class="form-control" placeholder="{{  __('vat') }} " value="{{  old('vat') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="accounting_ref" class="col-md-2 col-form-label">@lang('accounting_ref')</label>

                    <div class="col-md-10">
                        <input type="text" name="accounting_ref" class="form-control" placeholder="{{  __('accounting_ref') }} " value="{{  old('accounting_ref') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="discount" class="col-md-2 col-form-label">@lang('discount')</label>

                    <div class="col-md-10">
                        <input type="text" name="discount" class="form-control" placeholder="{{  __('discount') }} " value="{{  old('discount') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="quality_check" class="col-md-2 col-form-label">@lang('quality_check')</label>

                    <div class="col-md-10">
                        <input type="text" name="quality_check" class="form-control" placeholder="{{  __('quality_check') }} " value="{{  old('quality_check') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="note" class="col-md-2 col-form-label">@lang('note')</label>

                    <div class="col-md-10">
                        <input type="text" name="note" class="form-control" placeholder="{{  __('note') }} " value="{{  old('note') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="inhouse_note" class="col-md-2 col-form-label">@lang('inhouse_note')</label>

                    <div class="col-md-10">
                        <input type="text" name="inhouse_note" class="form-control" placeholder="{{  __('inhouse_note') }} " value="{{  old('inhouse_note') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="submit_account_date" class="col-md-2 col-form-label">@lang('submit_account_date')</label>

                    <div class="col-md-10">
                        <input type="text" name="submit_account_date" class="form-control" placeholder="{{  __('submit_account_date') }} " value="{{  old('submit_account_date') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{  old('type_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="payment_method" class="col-md-2 col-form-label">@lang('payment_method')</label>

                    <div class="col-md-10">
                        <input type="text" name="payment_method" class="form-control" placeholder="{{  __('payment_method') }} " value="{{  old('payment_method') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="subscription_type" class="col-md-2 col-form-label">@lang('subscription_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="subscription_type" class="form-control" placeholder="{{  __('subscription_type') }} " value="{{  old('subscription_type') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="is_active" class="col-md-2 col-form-label">@lang('is_active')</label>

                    <div class="col-md-10">
                        <input type="text" name="is_active" class="form-control" placeholder="{{  __('is_active') }} " value="{{  old('is_active') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="deactivate_reason" class="col-md-2 col-form-label">@lang('deactivate_reason')</label>

                    <div class="col-md-10">
                        <input type="text" name="deactivate_reason" class="form-control" placeholder="{{  __('deactivate_reason') }} " value="{{  old('deactivate_reason') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="shop_name" class="col-md-2 col-form-label">@lang('shop_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="shop_name" class="form-control" placeholder="{{  __('shop_name') }} " value="{{  old('shop_name') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">@lang('name')</label>

                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control" placeholder="{{  __('name') }} " value="{{  old('name') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="default_address_id" class="col-md-2 col-form-label">@lang('default_address_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="default_address_id" class="form-control" placeholder="{{  __('default_address_id') }} " value="{{  old('default_address_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="waybill" class="col-md-2 col-form-label">@lang('waybill')</label>

                    <div class="col-md-10">
                        <input type="text" name="waybill" class="form-control" placeholder="{{  __('waybill') }} " value="{{  old('waybill') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="phone_number" class="col-md-2 col-form-label">@lang('phone_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="phone_number" class="form-control" placeholder="{{  __('phone_number') }} " value="{{  old('phone_number') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="email_notifications" class="col-md-2 col-form-label">@lang('email_notifications')</label>

                    <div class="col-md-10">
                        <input type="text" name="email_notifications" class="form-control" placeholder="{{  __('email_notifications') }} " value="{{  old('email_notifications') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="sms_notifications" class="col-md-2 col-form-label">@lang('sms_notifications')</label>

                    <div class="col-md-10">
                        <input type="text" name="sms_notifications" class="form-control" placeholder="{{  __('sms_notifications') }} " value="{{  old('sms_notifications') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="account_manager_id" class="col-md-2 col-form-label">@lang('account_manager_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="account_manager_id" class="form-control" placeholder="{{  __('account_manager_id') }} " value="{{  old('account_manager_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="industry_id" class="col-md-2 col-form-label">@lang('industry_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="industry_id" class="form-control" placeholder="{{  __('industry_id') }} " value="{{  old('industry_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="logo" class="col-md-2 col-form-label">@lang('logo')</label>

                    <div class="col-md-10">
                        <input type="text" name="logo" class="form-control" placeholder="{{  __('logo') }} " value="{{  old('logo') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="online_platform" class="col-md-2 col-form-label">@lang('online_platform')</label>

                    <div class="col-md-10">
                        <input type="text" name="online_platform" class="form-control" placeholder="{{  __('online_platform') }} " value="{{  old('online_platform') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="established_year" class="col-md-2 col-form-label">@lang('established_year')</label>

                    <div class="col-md-10">
                        <input type="text" name="established_year" class="form-control" placeholder="{{  __('established_year') }} " value="{{  old('established_year') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="is_product_delicate" class="col-md-2 col-form-label">@lang('is_product_delicate')</label>

                    <div class="col-md-10">
                        <input type="text" name="is_product_delicate" class="form-control" placeholder="{{  __('is_product_delicate') }} " value="{{  old('is_product_delicate') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="require_bigger_car" class="col-md-2 col-form-label">@lang('require_bigger_car')</label>

                    <div class="col-md-10">
                        <input type="text" name="require_bigger_car" class="form-control" placeholder="{{  __('require_bigger_car') }} " value="{{  old('require_bigger_car') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="pickup_preference" class="col-md-2 col-form-label">@lang('pickup_preference')</label>

                    <div class="col-md-10">
                        <input type="text" name="pickup_preference" class="form-control" placeholder="{{  __('pickup_preference') }} " value="{{  old('pickup_preference') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="orders_per_month" class="col-md-2 col-form-label">@lang('orders_per_month')</label>

                    <div class="col-md-10">
                        <input type="text" name="orders_per_month" class="form-control" placeholder="{{  __('orders_per_month') }} " value="{{  old('orders_per_month') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="order_average_value" class="col-md-2 col-form-label">@lang('order_average_value')</label>

                    <div class="col-md-10">
                        <input type="text" name="order_average_value" class="form-control" placeholder="{{  __('order_average_value') }} " value="{{  old('order_average_value') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="return_products" class="col-md-2 col-form-label">@lang('return_products')</label>

                    <div class="col-md-10">
                        <input type="text" name="return_products" class="form-control" placeholder="{{  __('return_products') }} " value="{{  old('return_products') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="beneficiary_name" class="col-md-2 col-form-label">@lang('beneficiary_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="beneficiary_name" class="form-control" placeholder="{{  __('beneficiary_name') }} " value="{{  old('beneficiary_name') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="official_invoice_needed" class="col-md-2 col-form-label">@lang('official_invoice_needed')</label>

                    <div class="col-md-10">
                        <input type="text" name="official_invoice_needed" class="form-control" placeholder="{{  __('official_invoice_needed') }} " value="{{  old('official_invoice_needed') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Customer')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection