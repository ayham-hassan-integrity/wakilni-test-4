@extends('backend.layouts.app')

@section('title', __('Update Telescopemonitoring'))

@section('content')
    <x-forms.patch :action="route('admin.telescopemonitoring.update', $telescopemonitoring)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Telescopemonitoring')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.telescopemonitoring.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="tag" class="col-md-2 col-form-label">@lang('tag')</label>

                    <div class="col-md-10">
                        <input type="text" name="tag" class="form-control" placeholder="{{  __('tag') }} " value="{{   $telescopemonitoring->title }}  "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Telescopemonitoring')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection