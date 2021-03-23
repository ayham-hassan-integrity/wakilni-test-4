@extends('backend.layouts.app')

@section('title', __('Update Driverzone'))

@section('content')
    <x-forms.patch :action="route('admin.driverzone.update', $driverzone)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Driverzone')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.driverzone.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="zone_id" class="col-md-2 col-form-label">@lang('zone_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="zone_id" class="form-control" placeholder="{{  __('zone_id') }} " value="{{   $driverzone->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="driver_id" class="col-md-2 col-form-label">@lang('driver_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="driver_id" class="form-control" placeholder="{{  __('driver_id') }} " value="{{   $driverzone->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Driverzone')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection