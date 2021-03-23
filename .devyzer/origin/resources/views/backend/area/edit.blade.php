@extends('backend.layouts.app')

@section('title', __('Update Area'))

@section('content')
    <x-forms.patch :action="route('admin.area.update', $area)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Area')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.area.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">@lang('name')</label>

                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control" placeholder="{{  __('name') }} " value="{{   $area->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="zone_id" class="col-md-2 col-form-label">@lang('zone_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="zone_id" class="form-control" placeholder="{{  __('zone_id') }} " value="{{   $area->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Area')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection