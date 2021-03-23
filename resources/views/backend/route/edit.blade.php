@extends('backend.layouts.app')

@section('title', __('Update Route'))

@section('content')
    <x-forms.patch :action="route('admin.route.update', $route)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Route')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.route.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="route" class="col-md-2 col-form-label">@lang('route')</label>

                    <div class="col-md-10">
                        <input type="text" name="route" class="form-control" placeholder="{{  __('route') }} " value="{{   $route->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="km/day" class="col-md-2 col-form-label">@lang('km/day')</label>

                    <div class="col-md-10">
                        <input type="text" name="km/day" class="form-control" placeholder="{{  __('km/day') }} " value="{{   $route->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="today" class="col-md-2 col-form-label">@lang('today')</label>

                    <div class="col-md-10">
                        <input type="text" name="today" class="form-control" placeholder="{{  __('today') }} " value="{{   $route->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="driver_id" class="col-md-2 col-form-label">@lang('driver_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="driver_id" class="form-control" placeholder="{{  __('driver_id') }} " value="{{   $route->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Route')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection