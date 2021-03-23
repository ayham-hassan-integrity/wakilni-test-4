@extends('backend.layouts.app')

@section('title', __('Update Driver'))

@section('content')
    <x-forms.patch :action="route('admin.driver.update', $driver)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Driver')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.driver.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="nationality" class="col-md-2 col-form-label">@lang('nationality')</label>

                    <div class="col-md-10">
                        <input type="text" name="nationality" class="form-control" placeholder="{{  __('nationality') }} " value="{{   $driver->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="color" class="col-md-2 col-form-label">@lang('color')</label>

                    <div class="col-md-10">
                        <input type="text" name="color" class="form-control" placeholder="{{  __('color') }} " value="{{   $driver->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="has_gps" class="col-md-2 col-form-label">@lang('has_gps')</label>

                    <div class="col-md-10">
                        <input type="text" name="has_gps" class="form-control" placeholder="{{  __('has_gps') }} " value="{{   $driver->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="has_internet" class="col-md-2 col-form-label">@lang('has_internet')</label>

                    <div class="col-md-10">
                        <input type="text" name="has_internet" class="form-control" placeholder="{{  __('has_internet') }} " value="{{   $driver->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="status" class="col-md-2 col-form-label">@lang('status')</label>

                    <div class="col-md-10">
                        <input type="text" name="status" class="form-control" placeholder="{{  __('status') }} " value="{{   $driver->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="user_id" class="col-md-2 col-form-label">@lang('user_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="user_id" class="form-control" placeholder="{{  __('user_id') }} " value="{{   $driver->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{   $driver->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="now_driving" class="col-md-2 col-form-label">@lang('now_driving')</label>

                    <div class="col-md-10">
                        <input type="text" name="now_driving" class="form-control" placeholder="{{  __('now_driving') }} " value="{{   $driver->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="is_active" class="col-md-2 col-form-label">@lang('is_active')</label>

                    <div class="col-md-10">
                        <input type="text" name="is_active" class="form-control" placeholder="{{  __('is_active') }} " value="{{   $driver->title }}  "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Driver')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection