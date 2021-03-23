@extends('backend.layouts.app')

@section('title', __('Update Office'))

@section('content')
    <x-forms.patch :action="route('admin.office.update', $office)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Office')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.office.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">@lang('name')</label>

                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control" placeholder="{{  __('name') }} " value="{{   $office->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="area" class="col-md-2 col-form-label">@lang('area')</label>

                    <div class="col-md-10">
                        <input type="text" name="area" class="form-control" placeholder="{{  __('area') }} " value="{{   $office->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="store_id" class="col-md-2 col-form-label">@lang('store_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="store_id" class="form-control" placeholder="{{  __('store_id') }} " value="{{   $office->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="phone_number" class="col-md-2 col-form-label">@lang('phone_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="phone_number" class="form-control" placeholder="{{  __('phone_number') }} " value="{{   $office->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Office')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection