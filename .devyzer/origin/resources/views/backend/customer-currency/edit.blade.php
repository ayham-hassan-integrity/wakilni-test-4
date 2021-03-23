@extends('backend.layouts.app')

@section('title', __('Update Customercurrency'))

@section('content')
    <x-forms.patch :action="route('admin.customercurrency.update', $customercurrency)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Customercurrency')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.customercurrency.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="customer_id" class="col-md-2 col-form-label">@lang('customer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_id" class="form-control" placeholder="{{  __('customer_id') }} " value="{{   $customercurrency->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="currency_id" class="col-md-2 col-form-label">@lang('currency_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="currency_id" class="form-control" placeholder="{{  __('currency_id') }} " value="{{   $customercurrency->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="exchange_rate" class="col-md-2 col-form-label">@lang('exchange_rate')</label>

                    <div class="col-md-10">
                        <input type="text" name="exchange_rate" class="form-control" placeholder="{{  __('exchange_rate') }} " value="{{   $customercurrency->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Customercurrency')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection