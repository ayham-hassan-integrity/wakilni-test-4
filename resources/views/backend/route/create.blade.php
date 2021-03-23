@extends('backend.layouts.app')

@section('title', __('Create Route'))

@section('content')
    <x-forms.post :action="route('admin.route.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Route')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.route.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="route" class="col-md-2 col-form-label">@lang('route')</label>

                    <div class="col-md-10">
                        <input type="text" name="route" class="form-control" placeholder="{{  __('route') }} " value="{{  old('route') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="km/day" class="col-md-2 col-form-label">@lang('km/day')</label>

                    <div class="col-md-10">
                        <input type="text" name="km/day" class="form-control" placeholder="{{  __('km/day') }} " value="{{  old('km/day') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="today" class="col-md-2 col-form-label">@lang('today')</label>

                    <div class="col-md-10">
                        <input type="text" name="today" class="form-control" placeholder="{{  __('today') }} " value="{{  old('today') }} "  />
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
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Route')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection