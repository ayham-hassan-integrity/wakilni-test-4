@extends('backend.layouts.app')

@section('title', __('Update Vehicle'))

@section('content')
    <x-forms.patch :action="route('admin.vehicle.update', $vehicle)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Vehicle')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.vehicle.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="count" class="col-md-2 col-form-label">@lang('count')</label>

                    <div class="col-md-10">
                        <input type="text" name="count" class="form-control" placeholder="{{  __('count') }} " value="{{   $vehicle->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="remaining" class="col-md-2 col-form-label">@lang('remaining')</label>

                    <div class="col-md-10">
                        <input type="text" name="remaining" class="form-control" placeholder="{{  __('remaining') }} " value="{{   $vehicle->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="maintenance" class="col-md-2 col-form-label">@lang('maintenance')</label>

                    <div class="col-md-10">
                        <input type="text" name="maintenance" class="form-control" placeholder="{{  __('maintenance') }} " value="{{   $vehicle->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{   $vehicle->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Vehicle')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection