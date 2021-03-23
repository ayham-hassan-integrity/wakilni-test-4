@extends('backend.layouts.app')

@section('title', __('Update Amount'))

@section('content')
    <x-forms.patch :action="route('admin.amount.update', $amount)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Amount')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.amount.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="amount" class="col-md-2 col-form-label">@lang('amount')</label>

                    <div class="col-md-10">
                        <input type="text" name="amount" class="form-control" placeholder="{{  __('amount') }} " value="{{   $amount->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="piggy_bank_id" class="col-md-2 col-form-label">@lang('piggy_bank_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="piggy_bank_id" class="form-control" placeholder="{{  __('piggy_bank_id') }} " value="{{   $amount->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{   $amount->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="currency_id" class="col-md-2 col-form-label">@lang('currency_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="currency_id" class="form-control" placeholder="{{  __('currency_id') }} " value="{{   $amount->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Amount')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection