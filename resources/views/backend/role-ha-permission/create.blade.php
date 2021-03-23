@extends('backend.layouts.app')

@section('title', __('Create Rolehapermission'))

@section('content')
    <x-forms.post :action="route('admin.rolehapermission.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Rolehapermission')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.rolehapermission.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="permission_id" class="col-md-2 col-form-label">@lang('permission_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="permission_id" class="form-control" placeholder="{{  __('permission_id') }} " value="{{  old('permission_id') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="role_id" class="col-md-2 col-form-label">@lang('role_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="role_id" class="form-control" placeholder="{{  __('role_id') }} " value="{{  old('role_id') }} "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Rolehapermission')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection