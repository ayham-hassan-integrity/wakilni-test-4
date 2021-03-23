@extends('backend.layouts.app')

@section('title', __('Update Package'))

@section('content')
    <x-forms.patch :action="route('admin.package.update', $package)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Package')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.package.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="quantity" class="col-md-2 col-form-label">@lang('quantity')</label>

                    <div class="col-md-10">
                        <input type="text" name="quantity" class="form-control" placeholder="{{  __('quantity') }} " value="{{   $package->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="trip_number" class="col-md-2 col-form-label">@lang('trip_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="trip_number" class="form-control" placeholder="{{  __('trip_number') }} " value="{{   $package->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{   $package->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="order_details_id" class="col-md-2 col-form-label">@lang('order_details_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="order_details_id" class="form-control" placeholder="{{  __('order_details_id') }} " value="{{   $package->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Package')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection