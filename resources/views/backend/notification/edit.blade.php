@extends('backend.layouts.app')

@section('title', __('Update Notification'))

@section('content')
    <x-forms.patch :action="route('admin.notification.update', $notification)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Notification')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.notification.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{   $notification->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="notifiable_id" class="col-md-2 col-form-label">@lang('notifiable_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="notifiable_id" class="form-control" placeholder="{{  __('notifiable_id') }} " value="{{   $notification->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="notifiable_type" class="col-md-2 col-form-label">@lang('notifiable_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="notifiable_type" class="form-control" placeholder="{{  __('notifiable_type') }} " value="{{   $notification->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="data" class="col-md-2 col-form-label">@lang('data')</label>

                    <div class="col-md-10">
                        <input type="text" name="data" class="form-control" placeholder="{{  __('data') }} " value="{{   $notification->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="read_at" class="col-md-2 col-form-label">@lang('read_at')</label>

                    <div class="col-md-10">
                        <input type="text" name="read_at" class="form-control" placeholder="{{  __('read_at') }} " value="{{   $notification->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="objectable_id" class="col-md-2 col-form-label">@lang('objectable_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="objectable_id" class="form-control" placeholder="{{  __('objectable_id') }} " value="{{   $notification->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="objectable_type" class="col-md-2 col-form-label">@lang('objectable_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="objectable_type" class="form-control" placeholder="{{  __('objectable_type') }} " value="{{   $notification->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Notification')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection