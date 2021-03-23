@extends('backend.layouts.app')

@section('title', __('Create Customeroperator'))

@section('content')
    <x-forms.post :action="route('admin.customeroperator.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Customeroperator')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.customeroperator.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="customer_id" class="col-md-2 col-form-label">@lang('customer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_id" class="form-control" placeholder="{{  __('customer_id') }} " value="{{  old('customer_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="operator_id" class="col-md-2 col-form-label">@lang('operator_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="operator_id" class="form-control" placeholder="{{  __('operator_id') }} " value="{{  old('operator_id') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Customeroperator')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection