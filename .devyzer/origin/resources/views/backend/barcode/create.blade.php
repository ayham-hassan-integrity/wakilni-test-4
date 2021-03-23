@extends('backend.layouts.app')

@section('title', __('Create Barcode'))

@section('content')
    <x-forms.post :action="route('admin.barcode.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Barcode')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.barcode.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="status" class="col-md-2 col-form-label">@lang('status')</label>

                    <div class="col-md-10">
                        <input type="text" name="status" class="form-control" placeholder="{{  __('status') }} " value="{{  old('status') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="barcode_order_number" class="col-md-2 col-form-label">@lang('barcode_order_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="barcode_order_number" class="form-control" placeholder="{{  __('barcode_order_number') }} " value="{{  old('barcode_order_number') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="pickup_order_id" class="col-md-2 col-form-label">@lang('pickup_order_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="pickup_order_id" class="form-control" placeholder="{{  __('pickup_order_id') }} " value="{{  old('pickup_order_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="pickup_task_id" class="col-md-2 col-form-label">@lang('pickup_task_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="pickup_task_id" class="form-control" placeholder="{{  __('pickup_task_id') }} " value="{{  old('pickup_task_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="pickup_driver_id" class="col-md-2 col-form-label">@lang('pickup_driver_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="pickup_driver_id" class="form-control" placeholder="{{  __('pickup_driver_id') }} " value="{{  old('pickup_driver_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="delivery_order_id" class="col-md-2 col-form-label">@lang('delivery_order_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="delivery_order_id" class="form-control" placeholder="{{  __('delivery_order_id') }} " value="{{  old('delivery_order_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_id" class="col-md-2 col-form-label">@lang('customer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_id" class="form-control" placeholder="{{  __('customer_id') }} " value="{{  old('customer_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="scanned_at" class="col-md-2 col-form-label">@lang('scanned_at')</label>

                    <div class="col-md-10">
                        <input type="text" name="scanned_at" class="form-control" placeholder="{{  __('scanned_at') }} " value="{{  old('scanned_at') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Barcode')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection