@extends('backend.layouts.app')

@section('title', __('Update Store'))

@section('content')
    <x-forms.patch :action="route('admin.store.update', $store)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Store')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.store.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">@lang('name')</label>

                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control" placeholder="{{  __('name') }} " value="{{   $store->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="prefix" class="col-md-2 col-form-label">@lang('prefix')</label>

                    <div class="col-md-10">
                        <input type="text" name="prefix" class="form-control" placeholder="{{  __('prefix') }} " value="{{   $store->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="area" class="col-md-2 col-form-label">@lang('area')</label>

                    <div class="col-md-10">
                        <input type="text" name="area" class="form-control" placeholder="{{  __('area') }} " value="{{   $store->title }}  "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Store')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection