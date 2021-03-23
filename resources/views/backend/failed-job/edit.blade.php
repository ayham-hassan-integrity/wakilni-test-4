@extends('backend.layouts.app')

@section('title', __('Update Failedjob'))

@section('content')
    <x-forms.patch :action="route('admin.failedjob.update', $failedjob)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Failedjob')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.failedjob.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="connection" class="col-md-2 col-form-label">@lang('connection')</label>

                    <div class="col-md-10">
                        <input type="text" name="connection" class="form-control" placeholder="{{  __('connection') }} " value="{{   $failedjob->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="queue" class="col-md-2 col-form-label">@lang('queue')</label>

                    <div class="col-md-10">
                        <input type="text" name="queue" class="form-control" placeholder="{{  __('queue') }} " value="{{   $failedjob->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="payload" class="col-md-2 col-form-label">@lang('payload')</label>

                    <div class="col-md-10">
                        <input type="text" name="payload" class="form-control" placeholder="{{  __('payload') }} " value="{{   $failedjob->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="exception" class="col-md-2 col-form-label">@lang('exception')</label>

                    <div class="col-md-10">
                        <input type="text" name="exception" class="form-control" placeholder="{{  __('exception') }} " value="{{   $failedjob->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="failed_at" class="col-md-2 col-form-label">@lang('failed_at')</label>

                    <div class="col-md-10">
                        <input type="text" name="failed_at" class="form-control" placeholder="{{  __('failed_at') }} " value="{{   $failedjob->title }}  "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Failedjob')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection