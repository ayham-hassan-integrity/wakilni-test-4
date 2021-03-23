@extends('backend.layouts.app')

@section('title', __('Create User'))

@section('content')
    <x-forms.post :action="route('admin.user.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create User')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.user.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label">@lang('email')</label>

                    <div class="col-md-10">
                        <input type="text" name="email" class="form-control" placeholder="{{  __('email') }} " value="{{  old('email') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="phone_number" class="col-md-2 col-form-label">@lang('phone_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="phone_number" class="form-control" placeholder="{{  __('phone_number') }} " value="{{  old('phone_number') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="password" class="col-md-2 col-form-label">@lang('password')</label>

                    <div class="col-md-10">
                        <input type="text" name="password" class="form-control" placeholder="{{  __('password') }} " value="{{  old('password') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="pattern" class="col-md-2 col-form-label">@lang('pattern')</label>

                    <div class="col-md-10">
                        <input type="text" name="pattern" class="form-control" placeholder="{{  __('pattern') }} " value="{{  old('pattern') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="start_date" class="col-md-2 col-form-label">@lang('start_date')</label>

                    <div class="col-md-10">
                        <input type="text" name="start_date" class="form-control" placeholder="{{  __('start_date') }} " value="{{  old('start_date') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="office_id" class="col-md-2 col-form-label">@lang('office_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="office_id" class="form-control" placeholder="{{  __('office_id') }} " value="{{  old('office_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="remember_token" class="col-md-2 col-form-label">@lang('remember_token')</label>

                    <div class="col-md-10">
                        <input type="text" name="remember_token" class="form-control" placeholder="{{  __('remember_token') }} " value="{{  old('remember_token') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="contact_id" class="col-md-2 col-form-label">@lang('contact_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="contact_id" class="form-control" placeholder="{{  __('contact_id') }} " value="{{  old('contact_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_id" class="col-md-2 col-form-label">@lang('customer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_id" class="form-control" placeholder="{{  __('customer_id') }} " value="{{  old('customer_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="last_login" class="col-md-2 col-form-label">@lang('last_login')</label>

                    <div class="col-md-10">
                        <input type="text" name="last_login" class="form-control" placeholder="{{  __('last_login') }} " value="{{  old('last_login') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="is_active" class="col-md-2 col-form-label">@lang('is_active')</label>

                    <div class="col-md-10">
                        <input type="text" name="is_active" class="form-control" placeholder="{{  __('is_active') }} " value="{{  old('is_active') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="language_type" class="col-md-2 col-form-label">@lang('language_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="language_type" class="form-control" placeholder="{{  __('language_type') }} " value="{{  old('language_type') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="time_zone" class="col-md-2 col-form-label">@lang('time_zone')</label>

                    <div class="col-md-10">
                        <input type="text" name="time_zone" class="form-control" placeholder="{{  __('time_zone') }} " value="{{  old('time_zone') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="provider_name" class="col-md-2 col-form-label">@lang('provider_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="provider_name" class="form-control" placeholder="{{  __('provider_name') }} " value="{{  old('provider_name') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="provider_token" class="col-md-2 col-form-label">@lang('provider_token')</label>

                    <div class="col-md-10">
                        <input type="text" name="provider_token" class="form-control" placeholder="{{  __('provider_token') }} " value="{{  old('provider_token') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create User')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection