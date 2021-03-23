@extends('backend.layouts.app')

@section('title', __('Create Timezone'))

@section('content')
    <x-forms.post :action="route('admin.timezone.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Timezone')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.timezone.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="zone" class="col-md-2 col-form-label">@lang('zone')</label>

                    <div class="col-md-10">
                        <input type="text" name="zone" class="form-control" placeholder="{{  __('zone') }} " value="{{  old('zone') }} "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Timezone')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection