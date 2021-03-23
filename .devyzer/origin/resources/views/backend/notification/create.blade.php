@extends('backend.layouts.app')

@section('title', __('Create Notification'))

@section('content')
    <x-forms.post :action="route('admin.notification.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Notification')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.notification.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{  old('type_id') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="notifiable_id" class="col-md-2 col-form-label">@lang('notifiable_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="notifiable_id" class="form-control" placeholder="{{  __('notifiable_id') }} " value="{{  old('notifiable_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="notifiable_type" class="col-md-2 col-form-label">@lang('notifiable_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="notifiable_type" class="form-control" placeholder="{{  __('notifiable_type') }} " value="{{  old('notifiable_type') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="data" class="col-md-2 col-form-label">@lang('data')</label>

                    <div class="col-md-10">
                        <input type="text" name="data" class="form-control" placeholder="{{  __('data') }} " value="{{  old('data') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="read_at" class="col-md-2 col-form-label">@lang('read_at')</label>

                    <div class="col-md-10">
                        <input type="text" name="read_at" class="form-control" placeholder="{{  __('read_at') }} " value="{{  old('read_at') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="objectable_id" class="col-md-2 col-form-label">@lang('objectable_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="objectable_id" class="form-control" placeholder="{{  __('objectable_id') }} " value="{{  old('objectable_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="objectable_type" class="col-md-2 col-form-label">@lang('objectable_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="objectable_type" class="form-control" placeholder="{{  __('objectable_type') }} " value="{{  old('objectable_type') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Notification')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection