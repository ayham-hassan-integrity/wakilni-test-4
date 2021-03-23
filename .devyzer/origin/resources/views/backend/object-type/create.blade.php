@extends('backend.layouts.app')

@section('title', __('Create Objecttype'))

@section('content')
    <x-forms.post :action="route('admin.objecttype.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Objecttype')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.objecttype.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="type" class="col-md-2 col-form-label">@lang('type')</label>

                    <div class="col-md-10">
                        <input type="text" name="type" class="form-control" placeholder="{{  __('type') }} " value="{{  old('type') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="label" class="col-md-2 col-form-label">@lang('label')</label>

                    <div class="col-md-10">
                        <input type="text" name="label" class="form-control" placeholder="{{  __('label') }} " value="{{  old('label') }} "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Objecttype')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection