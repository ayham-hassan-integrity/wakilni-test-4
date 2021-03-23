@extends('backend.layouts.app')

@section('title', __('Create Payment'))

@section('content')
    <x-forms.post :action="route('admin.payment.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Payment')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.payment.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="order_id" class="col-md-2 col-form-label">@lang('order_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="order_id" class="form-control" placeholder="{{  __('order_id') }} " value="{{  old('order_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_id" class="col-md-2 col-form-label">@lang('customer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_id" class="form-control" placeholder="{{  __('customer_id') }} " value="{{  old('customer_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="piggy_bank_id" class="col-md-2 col-form-label">@lang('piggy_bank_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="piggy_bank_id" class="form-control" placeholder="{{  __('piggy_bank_id') }} " value="{{  old('piggy_bank_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{  old('type_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="amount" class="col-md-2 col-form-label">@lang('amount')</label>

                    <div class="col-md-10">
                        <input type="text" name="amount" class="form-control" placeholder="{{  __('amount') }} " value="{{  old('amount') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="currency_id" class="col-md-2 col-form-label">@lang('currency_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="currency_id" class="form-control" placeholder="{{  __('currency_id') }} " value="{{  old('currency_id') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Payment')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection