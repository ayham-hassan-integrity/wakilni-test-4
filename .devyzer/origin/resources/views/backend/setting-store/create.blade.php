@extends('backend.layouts.app')

@section('title', __('Create Settingstore'))

@section('content')
    <x-forms.post :action="route('admin.settingstore.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Settingstore')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.settingstore.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="store_id" class="col-md-2 col-form-label">@lang('store_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="store_id" class="form-control" placeholder="{{  __('store_id') }} " value="{{  old('store_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="setting_id" class="col-md-2 col-form-label">@lang('setting_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="setting_id" class="form-control" placeholder="{{  __('setting_id') }} " value="{{  old('setting_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="value" class="col-md-2 col-form-label">@lang('value')</label>

                    <div class="col-md-10">
                        <input type="text" name="value" class="form-control" placeholder="{{  __('value') }} " value="{{  old('value') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Settingstore')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection