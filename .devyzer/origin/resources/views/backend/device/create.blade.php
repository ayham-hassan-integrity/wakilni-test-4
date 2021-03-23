@extends('backend.layouts.app')

@section('title', __('Create Device'))

@section('content')
    <x-forms.post :action="route('admin.device.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Device')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.device.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="user_id" class="col-md-2 col-form-label">@lang('user_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="user_id" class="form-control" placeholder="{{  __('user_id') }} " value="{{  old('user_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type" class="col-md-2 col-form-label">@lang('type')</label>

                    <div class="col-md-10">
                        <input type="text" name="type" class="form-control" placeholder="{{  __('type') }} " value="{{  old('type') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="token" class="col-md-2 col-form-label">@lang('token')</label>

                    <div class="col-md-10">
                        <input type="text" name="token" class="form-control" placeholder="{{  __('token') }} " value="{{  old('token') }} "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Device')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection