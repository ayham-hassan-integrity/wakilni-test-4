@extends('backend.layouts.app')

@section('title', __('Update Zone'))

@section('content')
    <x-forms.patch :action="route('admin.zone.update', $zone)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Zone')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.zone.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="label" class="col-md-2 col-form-label">@lang('label')</label>

                    <div class="col-md-10">
                        <input type="text" name="label" class="form-control" placeholder="{{  __('label') }} " value="{{   $zone->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="area" class="col-md-2 col-form-label">@lang('area')</label>

                    <div class="col-md-10">
                        <input type="text" name="area" class="form-control" placeholder="{{  __('area') }} " value="{{   $zone->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="store_id" class="col-md-2 col-form-label">@lang('store_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="store_id" class="form-control" placeholder="{{  __('store_id') }} " value="{{   $zone->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="description" class="col-md-2 col-form-label">@lang('description')</label>

                    <div class="col-md-10">
                        <input type="text" name="description" class="form-control" placeholder="{{  __('description') }} " value="{{   $zone->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Zone')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection