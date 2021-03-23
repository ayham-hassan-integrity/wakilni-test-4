@extends('backend.layouts.app')

@section('title', __('Create Migration'))

@section('content')
    <x-forms.post :action="route('admin.migration.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Migration')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.migration.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="migration" class="col-md-2 col-form-label">@lang('migration')</label>

                    <div class="col-md-10">
                        <input type="text" name="migration" class="form-control" placeholder="{{  __('migration') }} " value="{{  old('migration') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="batch" class="col-md-2 col-form-label">@lang('batch')</label>

                    <div class="col-md-10">
                        <input type="text" name="batch" class="form-control" placeholder="{{  __('batch') }} " value="{{  old('batch') }} "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Migration')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection