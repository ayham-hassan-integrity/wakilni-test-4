@extends('backend.layouts.app')

@section('title', __('Create Recipient'))

@section('content')
    <x-forms.post :action="route('admin.recipient.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Recipient')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.recipient.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="first_name" class="col-md-2 col-form-label">@lang('first_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="first_name" class="form-control" placeholder="{{  __('first_name') }} " value="{{  old('first_name') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="last_name" class="col-md-2 col-form-label">@lang('last_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="last_name" class="form-control" placeholder="{{  __('last_name') }} " value="{{  old('last_name') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="phone_number" class="col-md-2 col-form-label">@lang('phone_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="phone_number" class="form-control" placeholder="{{  __('phone_number') }} " value="{{  old('phone_number') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="date_of_birth" class="col-md-2 col-form-label">@lang('date_of_birth')</label>

                    <div class="col-md-10">
                        <input type="text" name="date_of_birth" class="form-control" placeholder="{{  __('date_of_birth') }} " value="{{  old('date_of_birth') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="gender" class="col-md-2 col-form-label">@lang('gender')</label>

                    <div class="col-md-10">
                        <input type="text" name="gender" class="form-control" placeholder="{{  __('gender') }} " value="{{  old('gender') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label">@lang('email')</label>

                    <div class="col-md-10">
                        <input type="text" name="email" class="form-control" placeholder="{{  __('email') }} " value="{{  old('email') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="note" class="col-md-2 col-form-label">@lang('note')</label>

                    <div class="col-md-10">
                        <input type="text" name="note" class="form-control" placeholder="{{  __('note') }} " value="{{  old('note') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="allow_driver_contact" class="col-md-2 col-form-label">@lang('allow_driver_contact')</label>

                    <div class="col-md-10">
                        <input type="text" name="allow_driver_contact" class="form-control" placeholder="{{  __('allow_driver_contact') }} " value="{{  old('allow_driver_contact') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="viewer_id" class="col-md-2 col-form-label">@lang('viewer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="viewer_id" class="form-control" placeholder="{{  __('viewer_id') }} " value="{{  old('viewer_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="contact_id" class="col-md-2 col-form-label">@lang('contact_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="contact_id" class="form-control" placeholder="{{  __('contact_id') }} " value="{{  old('contact_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="default_address_id" class="col-md-2 col-form-label">@lang('default_address_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="default_address_id" class="form-control" placeholder="{{  __('default_address_id') }} " value="{{  old('default_address_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="secondary_phone_number" class="col-md-2 col-form-label">@lang('secondary_phone_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="secondary_phone_number" class="form-control" placeholder="{{  __('secondary_phone_number') }} " value="{{  old('secondary_phone_number') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="app_token_id" class="col-md-2 col-form-label">@lang('app_token_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="app_token_id" class="form-control" placeholder="{{  __('app_token_id') }} " value="{{  old('app_token_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="app_ref_id" class="col-md-2 col-form-label">@lang('app_ref_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="app_ref_id" class="form-control" placeholder="{{  __('app_ref_id') }} " value="{{  old('app_ref_id') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Recipient')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection