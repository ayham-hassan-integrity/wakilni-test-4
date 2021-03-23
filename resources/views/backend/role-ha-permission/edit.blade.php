@extends('backend.layouts.app')

@section('title', __('Update Rolehapermission'))

@section('content')
    <x-forms.patch :action="route('admin.rolehapermission.update', $rolehapermission)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Rolehapermission')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.rolehapermission.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="permission_id" class="col-md-2 col-form-label">@lang('permission_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="permission_id" class="form-control" placeholder="{{  __('permission_id') }} " value="{{   $rolehapermission->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="role_id" class="col-md-2 col-form-label">@lang('role_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="role_id" class="form-control" placeholder="{{  __('role_id') }} " value="{{   $rolehapermission->title }}  "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Rolehapermission')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection