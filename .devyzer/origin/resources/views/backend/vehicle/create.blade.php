@extends('backend.layouts.app')

@section('title', __('Create Vehicle'))

@section('content')
    <x-forms.post :action="route('admin.vehicle.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Vehicle')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.vehicle.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="count" class="col-md-2 col-form-label">@lang('count')</label>

                    <div class="col-md-10">
                        <input type="text" name="count" class="form-control" placeholder="{{  __('count') }} " value="{{  old('count') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="remaining" class="col-md-2 col-form-label">@lang('remaining')</label>

                    <div class="col-md-10">
                        <input type="text" name="remaining" class="form-control" placeholder="{{  __('remaining') }} " value="{{  old('remaining') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="maintenance" class="col-md-2 col-form-label">@lang('maintenance')</label>

                    <div class="col-md-10">
                        <input type="text" name="maintenance" class="form-control" placeholder="{{  __('maintenance') }} " value="{{  old('maintenance') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{  old('type_id') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Vehicle')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection