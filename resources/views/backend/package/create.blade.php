@extends('backend.layouts.app')

@section('title', __('Create Package'))

@section('content')
    <x-forms.post :action="route('admin.package.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Package')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.package.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="quantity" class="col-md-2 col-form-label">@lang('quantity')</label>

                    <div class="col-md-10">
                        <input type="text" name="quantity" class="form-control" placeholder="{{  __('quantity') }} " value="{{  old('quantity') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="trip_number" class="col-md-2 col-form-label">@lang('trip_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="trip_number" class="form-control" placeholder="{{  __('trip_number') }} " value="{{  old('trip_number') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{  old('type_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="order_details_id" class="col-md-2 col-form-label">@lang('order_details_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="order_details_id" class="form-control" placeholder="{{  __('order_details_id') }} " value="{{  old('order_details_id') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Package')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection