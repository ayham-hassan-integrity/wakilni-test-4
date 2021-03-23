@extends('backend.layouts.app')

@section('title', __('Update Customerprice'))

@section('content')
    <x-forms.patch :action="route('admin.customerprice.update', $customerprice)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Customerprice')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.customerprice.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="minimum_count" class="col-md-2 col-form-label">@lang('minimum_count')</label>

                    <div class="col-md-10">
                        <input type="text" name="minimum_count" class="form-control" placeholder="{{  __('minimum_count') }} " value="{{   $customerprice->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="maximum_count" class="col-md-2 col-form-label">@lang('maximum_count')</label>

                    <div class="col-md-10">
                        <input type="text" name="maximum_count" class="form-control" placeholder="{{  __('maximum_count') }} " value="{{   $customerprice->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="price" class="col-md-2 col-form-label">@lang('price')</label>

                    <div class="col-md-10">
                        <input type="text" name="price" class="form-control" placeholder="{{  __('price') }} " value="{{   $customerprice->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_id" class="col-md-2 col-form-label">@lang('customer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_id" class="form-control" placeholder="{{  __('customer_id') }} " value="{{   $customerprice->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="from_zone_id" class="col-md-2 col-form-label">@lang('from_zone_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="from_zone_id" class="form-control" placeholder="{{  __('from_zone_id') }} " value="{{   $customerprice->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="to_zone_id" class="col-md-2 col-form-label">@lang('to_zone_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="to_zone_id" class="form-control" placeholder="{{  __('to_zone_id') }} " value="{{   $customerprice->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Customerprice')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection