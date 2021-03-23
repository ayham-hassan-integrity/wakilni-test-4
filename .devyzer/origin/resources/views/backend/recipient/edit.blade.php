@extends('backend.layouts.app')

@section('title', __('Update Recipient'))

@section('content')
    <x-forms.patch :action="route('admin.recipient.update', $recipient)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Recipient')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.recipient.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="first_name" class="col-md-2 col-form-label">@lang('first_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="first_name" class="form-control" placeholder="{{  __('first_name') }} " value="{{   $recipient->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="last_name" class="col-md-2 col-form-label">@lang('last_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="last_name" class="form-control" placeholder="{{  __('last_name') }} " value="{{   $recipient->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="phone_number" class="col-md-2 col-form-label">@lang('phone_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="phone_number" class="form-control" placeholder="{{  __('phone_number') }} " value="{{   $recipient->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="date_of_birth" class="col-md-2 col-form-label">@lang('date_of_birth')</label>

                    <div class="col-md-10">
                        <input type="text" name="date_of_birth" class="form-control" placeholder="{{  __('date_of_birth') }} " value="{{   $recipient->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="gender" class="col-md-2 col-form-label">@lang('gender')</label>

                    <div class="col-md-10">
                        <input type="text" name="gender" class="form-control" placeholder="{{  __('gender') }} " value="{{   $recipient->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label">@lang('email')</label>

                    <div class="col-md-10">
                        <input type="text" name="email" class="form-control" placeholder="{{  __('email') }} " value="{{   $recipient->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="note" class="col-md-2 col-form-label">@lang('note')</label>

                    <div class="col-md-10">
                        <input type="text" name="note" class="form-control" placeholder="{{  __('note') }} " value="{{   $recipient->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="allow_driver_contact" class="col-md-2 col-form-label">@lang('allow_driver_contact')</label>

                    <div class="col-md-10">
                        <input type="text" name="allow_driver_contact" class="form-control" placeholder="{{  __('allow_driver_contact') }} " value="{{   $recipient->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="viewer_id" class="col-md-2 col-form-label">@lang('viewer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="viewer_id" class="form-control" placeholder="{{  __('viewer_id') }} " value="{{   $recipient->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="contact_id" class="col-md-2 col-form-label">@lang('contact_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="contact_id" class="form-control" placeholder="{{  __('contact_id') }} " value="{{   $recipient->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="default_address_id" class="col-md-2 col-form-label">@lang('default_address_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="default_address_id" class="form-control" placeholder="{{  __('default_address_id') }} " value="{{   $recipient->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="secondary_phone_number" class="col-md-2 col-form-label">@lang('secondary_phone_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="secondary_phone_number" class="form-control" placeholder="{{  __('secondary_phone_number') }} " value="{{   $recipient->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="app_token_id" class="col-md-2 col-form-label">@lang('app_token_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="app_token_id" class="form-control" placeholder="{{  __('app_token_id') }} " value="{{   $recipient->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="app_ref_id" class="col-md-2 col-form-label">@lang('app_ref_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="app_ref_id" class="form-control" placeholder="{{  __('app_ref_id') }} " value="{{   $recipient->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Recipient')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection