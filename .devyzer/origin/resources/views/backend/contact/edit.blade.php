@extends('backend.layouts.app')

@section('title', __('Update Contact'))

@section('content')
    <x-forms.patch :action="route('admin.contact.update', $contact)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Contact')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.contact.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="first_name" class="col-md-2 col-form-label">@lang('first_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="first_name" class="form-control" placeholder="{{  __('first_name') }} " value="{{   $contact->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="last_name" class="col-md-2 col-form-label">@lang('last_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="last_name" class="form-control" placeholder="{{  __('last_name') }} " value="{{   $contact->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="phone_number" class="col-md-2 col-form-label">@lang('phone_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="phone_number" class="form-control" placeholder="{{  __('phone_number') }} " value="{{   $contact->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="date_of_birth" class="col-md-2 col-form-label">@lang('date_of_birth')</label>

                    <div class="col-md-10">
                        <input type="text" name="date_of_birth" class="form-control" placeholder="{{  __('date_of_birth') }} " value="{{   $contact->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="gender" class="col-md-2 col-form-label">@lang('gender')</label>

                    <div class="col-md-10">
                        <input type="text" name="gender" class="form-control" placeholder="{{  __('gender') }} " value="{{   $contact->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="is_active" class="col-md-2 col-form-label">@lang('is_active')</label>

                    <div class="col-md-10">
                        <input type="text" name="is_active" class="form-control" placeholder="{{  __('is_active') }} " value="{{   $contact->title }}  "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Contact')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection