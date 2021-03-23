@extends('backend.layouts.app')

@section('title', __('Update Apptoken'))

@section('content')
    <x-forms.patch :action="route('admin.apptoken.update', $apptoken)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Apptoken')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.apptoken.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="shop" class="col-md-2 col-form-label">@lang('shop')</label>

                    <div class="col-md-10">
                        <input type="text" name="shop" class="form-control" placeholder="{{  __('shop') }} " value="{{   $apptoken->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="access_token" class="col-md-2 col-form-label">@lang('access_token')</label>

                    <div class="col-md-10">
                        <input type="text" name="access_token" class="form-control" placeholder="{{  __('access_token') }} " value="{{   $apptoken->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_id" class="col-md-2 col-form-label">@lang('customer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_id" class="form-control" placeholder="{{  __('customer_id') }} " value="{{   $apptoken->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="app_id" class="col-md-2 col-form-label">@lang('app_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="app_id" class="form-control" placeholder="{{  __('app_id') }} " value="{{   $apptoken->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="location_id" class="col-md-2 col-form-label">@lang('location_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="location_id" class="form-control" placeholder="{{  __('location_id') }} " value="{{   $apptoken->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="code" class="col-md-2 col-form-label">@lang('code')</label>

                    <div class="col-md-10">
                        <input type="text" name="code" class="form-control" placeholder="{{  __('code') }} " value="{{   $apptoken->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="authenticated" class="col-md-2 col-form-label">@lang('authenticated')</label>

                    <div class="col-md-10">
                        <input type="text" name="authenticated" class="form-control" placeholder="{{  __('authenticated') }} " value="{{   $apptoken->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="remember_token" class="col-md-2 col-form-label">@lang('remember_token')</label>

                    <div class="col-md-10">
                        <input type="text" name="remember_token" class="form-control" placeholder="{{  __('remember_token') }} " value="{{   $apptoken->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="country_code" class="col-md-2 col-form-label">@lang('country_code')</label>

                    <div class="col-md-10">
                        <input type="text" name="country_code" class="form-control" placeholder="{{  __('country_code') }} " value="{{   $apptoken->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="extra" class="col-md-2 col-form-label">@lang('extra')</label>

                    <div class="col-md-10">
                        <input type="text" name="extra" class="form-control" placeholder="{{  __('extra') }} " value="{{   $apptoken->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Apptoken')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection