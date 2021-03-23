@extends('backend.layouts.app')

@section('title', __('Update Objecttype'))

@section('content')
    <x-forms.patch :action="route('admin.objecttype.update', $objecttype)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Objecttype')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.objecttype.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="type" class="col-md-2 col-form-label">@lang('type')</label>

                    <div class="col-md-10">
                        <input type="text" name="type" class="form-control" placeholder="{{  __('type') }} " value="{{   $objecttype->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="label" class="col-md-2 col-form-label">@lang('label')</label>

                    <div class="col-md-10">
                        <input type="text" name="label" class="form-control" placeholder="{{  __('label') }} " value="{{   $objecttype->title }}  "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Objecttype')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection