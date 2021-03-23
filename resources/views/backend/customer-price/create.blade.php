@extends('backend.layouts.app')

@section('title', __('Create Customerprice'))

@section('content')
    <x-forms.post :action="route('admin.customerprice.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Customerprice')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.customerprice.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="minimum_count" class="col-md-2 col-form-label">@lang('minimum_count')</label>

                    <div class="col-md-10">
                        <input type="text" name="minimum_count" class="form-control" placeholder="{{  __('minimum_count') }} " value="{{  old('minimum_count') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="maximum_count" class="col-md-2 col-form-label">@lang('maximum_count')</label>

                    <div class="col-md-10">
                        <input type="text" name="maximum_count" class="form-control" placeholder="{{  __('maximum_count') }} " value="{{  old('maximum_count') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="price" class="col-md-2 col-form-label">@lang('price')</label>

                    <div class="col-md-10">
                        <input type="text" name="price" class="form-control" placeholder="{{  __('price') }} " value="{{  old('price') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_id" class="col-md-2 col-form-label">@lang('customer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_id" class="form-control" placeholder="{{  __('customer_id') }} " value="{{  old('customer_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="from_zone_id" class="col-md-2 col-form-label">@lang('from_zone_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="from_zone_id" class="form-control" placeholder="{{  __('from_zone_id') }} " value="{{  old('from_zone_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="to_zone_id" class="col-md-2 col-form-label">@lang('to_zone_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="to_zone_id" class="form-control" placeholder="{{  __('to_zone_id') }} " value="{{  old('to_zone_id') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Customerprice')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection