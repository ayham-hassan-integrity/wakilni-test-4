@extends('backend.layouts.app')

@section('title', __('Update Activitylog'))

@section('content')
    <x-forms.patch :action="route('admin.activitylog.update', $activitylog)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Activitylog')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.activitylog.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="log_name" class="col-md-2 col-form-label">@lang('log_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="log_name" class="form-control" placeholder="{{  __('log_name') }} " value="{{   $activitylog->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="description" class="col-md-2 col-form-label">@lang('description')</label>

                    <div class="col-md-10">
                        <input type="text" name="description" class="form-control" placeholder="{{  __('description') }} " value="{{   $activitylog->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="subject_id" class="col-md-2 col-form-label">@lang('subject_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="subject_id" class="form-control" placeholder="{{  __('subject_id') }} " value="{{   $activitylog->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="subject_type" class="col-md-2 col-form-label">@lang('subject_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="subject_type" class="form-control" placeholder="{{  __('subject_type') }} " value="{{   $activitylog->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="causer_id" class="col-md-2 col-form-label">@lang('causer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="causer_id" class="form-control" placeholder="{{  __('causer_id') }} " value="{{   $activitylog->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="causer_type" class="col-md-2 col-form-label">@lang('causer_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="causer_type" class="form-control" placeholder="{{  __('causer_type') }} " value="{{   $activitylog->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="properties" class="col-md-2 col-form-label">@lang('properties')</label>

                    <div class="col-md-10">
                        <input type="text" name="properties" class="form-control" placeholder="{{  __('properties') }} " value="{{   $activitylog->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Activitylog')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection