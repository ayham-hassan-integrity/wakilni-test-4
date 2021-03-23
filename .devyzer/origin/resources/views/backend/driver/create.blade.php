@extends('backend.layouts.app')

@section('title', __('Create Driver'))

@section('content')
    <x-forms.post :action="route('admin.driver.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Driver')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.driver.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="nationality" class="col-md-2 col-form-label">@lang('nationality')</label>

                    <div class="col-md-10">
                        <input type="text" name="nationality" class="form-control" placeholder="{{  __('nationality') }} " value="{{  old('nationality') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="color" class="col-md-2 col-form-label">@lang('color')</label>

                    <div class="col-md-10">
                        <input type="text" name="color" class="form-control" placeholder="{{  __('color') }} " value="{{  old('color') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="has_gps" class="col-md-2 col-form-label">@lang('has_gps')</label>

                    <div class="col-md-10">
                        <input type="text" name="has_gps" class="form-control" placeholder="{{  __('has_gps') }} " value="{{  old('has_gps') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="has_internet" class="col-md-2 col-form-label">@lang('has_internet')</label>

                    <div class="col-md-10">
                        <input type="text" name="has_internet" class="form-control" placeholder="{{  __('has_internet') }} " value="{{  old('has_internet') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="status" class="col-md-2 col-form-label">@lang('status')</label>

                    <div class="col-md-10">
                        <input type="text" name="status" class="form-control" placeholder="{{  __('status') }} " value="{{  old('status') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="user_id" class="col-md-2 col-form-label">@lang('user_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="user_id" class="form-control" placeholder="{{  __('user_id') }} " value="{{  old('user_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{  old('type_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="now_driving" class="col-md-2 col-form-label">@lang('now_driving')</label>

                    <div class="col-md-10">
                        <input type="text" name="now_driving" class="form-control" placeholder="{{  __('now_driving') }} " value="{{  old('now_driving') }} "  />
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
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Driver')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection