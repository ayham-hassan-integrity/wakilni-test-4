@extends('backend.layouts.app')

@section('title', __('Create Driverstock'))

@section('content')
    <x-forms.post :action="route('admin.driverstock.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Driverstock')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.driverstock.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="amount" class="col-md-2 col-form-label">@lang('amount')</label>

                    <div class="col-md-10">
                        <input type="text" name="amount" class="form-control" placeholder="{{  __('amount') }} " value="{{  old('amount') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="stock_id" class="col-md-2 col-form-label">@lang('stock_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="stock_id" class="form-control" placeholder="{{  __('stock_id') }} " value="{{  old('stock_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="driver_id" class="col-md-2 col-form-label">@lang('driver_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="driver_id" class="form-control" placeholder="{{  __('driver_id') }} " value="{{  old('driver_id') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Driverstock')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection