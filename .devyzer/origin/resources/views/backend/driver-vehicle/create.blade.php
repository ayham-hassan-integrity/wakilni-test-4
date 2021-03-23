@extends('backend.layouts.app')

@section('title', __('Create Drivervehicle'))

@section('content')
    <x-forms.post :action="route('admin.drivervehicle.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Drivervehicle')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.drivervehicle.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="vehicle_id" class="col-md-2 col-form-label">@lang('vehicle_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="vehicle_id" class="form-control" placeholder="{{  __('vehicle_id') }} " value="{{  old('vehicle_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="driver_id" class="col-md-2 col-form-label">@lang('driver_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="driver_id" class="form-control" placeholder="{{  __('driver_id') }} " value="{{  old('driver_id') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Drivervehicle')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection