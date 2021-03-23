@extends('backend.layouts.app')

@section('title', __('Create Failedjob'))

@section('content')
    <x-forms.post :action="route('admin.failedjob.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Failedjob')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.failedjob.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="connection" class="col-md-2 col-form-label">@lang('connection')</label>

                    <div class="col-md-10">
                        <input type="text" name="connection" class="form-control" placeholder="{{  __('connection') }} " value="{{  old('connection') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="queue" class="col-md-2 col-form-label">@lang('queue')</label>

                    <div class="col-md-10">
                        <input type="text" name="queue" class="form-control" placeholder="{{  __('queue') }} " value="{{  old('queue') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="payload" class="col-md-2 col-form-label">@lang('payload')</label>

                    <div class="col-md-10">
                        <input type="text" name="payload" class="form-control" placeholder="{{  __('payload') }} " value="{{  old('payload') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="exception" class="col-md-2 col-form-label">@lang('exception')</label>

                    <div class="col-md-10">
                        <input type="text" name="exception" class="form-control" placeholder="{{  __('exception') }} " value="{{  old('exception') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="failed_at" class="col-md-2 col-form-label">@lang('failed_at')</label>

                    <div class="col-md-10">
                        <input type="text" name="failed_at" class="form-control" placeholder="{{  __('failed_at') }} " value="{{  old('failed_at') }} "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Failedjob')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection