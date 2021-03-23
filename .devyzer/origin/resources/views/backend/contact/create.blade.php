@extends('backend.layouts.app')

@section('title', __('Create Contact'))

@section('content')
    <x-forms.post :action="route('admin.contact.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Contact')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.contact.index')" :text="__('Cancel')" />
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
                        <input type="text" name="phone_number" class="form-control" placeholder="{{  __('phone_number') }} " value="{{  old('phone_number') }} "  required   />
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
                    <label for="is_active" class="col-md-2 col-form-label">@lang('is_active')</label>

                    <div class="col-md-10">
                        <input type="text" name="is_active" class="form-control" placeholder="{{  __('is_active') }} " value="{{  old('is_active') }} "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Contact')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection