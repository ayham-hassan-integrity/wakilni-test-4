@extends('backend.layouts.app')

@section('title', __('Create Area'))

@section('content')
    <x-forms.post :action="route('admin.area.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Area')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.area.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">@lang('name')</label>

                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control" placeholder="{{  __('name') }} " value="{{  old('name') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="zone_id" class="col-md-2 col-form-label">@lang('zone_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="zone_id" class="form-control" placeholder="{{  __('zone_id') }} " value="{{  old('zone_id') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Area')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection