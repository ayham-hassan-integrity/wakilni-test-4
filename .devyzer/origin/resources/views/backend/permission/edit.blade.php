@extends('backend.layouts.app')

@section('title', __('Update Permission'))

@section('content')
    <x-forms.patch :action="route('admin.permission.update', $permission)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Permission')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.permission.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">@lang('name')</label>

                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control" placeholder="{{  __('name') }} " value="{{   $permission->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="guard_name" class="col-md-2 col-form-label">@lang('guard_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="guard_name" class="form-control" placeholder="{{  __('guard_name') }} " value="{{   $permission->title }}  "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Permission')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection