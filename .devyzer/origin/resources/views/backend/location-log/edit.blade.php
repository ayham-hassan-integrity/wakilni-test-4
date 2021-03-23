@extends('backend.layouts.app')

@section('title', __('Update Locationlog'))

@section('content')
    <x-forms.patch :action="route('admin.locationlog.update', $locationlog)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Locationlog')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.locationlog.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="data" class="col-md-2 col-form-label">@lang('data')</label>

                    <div class="col-md-10">
                        <input type="text" name="data" class="form-control" placeholder="{{  __('data') }} " value="{{   $locationlog->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="location_id" class="col-md-2 col-form-label">@lang('location_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="location_id" class="form-control" placeholder="{{  __('location_id') }} " value="{{   $locationlog->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="driver_id" class="col-md-2 col-form-label">@lang('driver_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="driver_id" class="form-control" placeholder="{{  __('driver_id') }} " value="{{   $locationlog->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{   $locationlog->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Locationlog')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection