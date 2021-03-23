@extends('backend.layouts.app')

@section('title', __('Update Modelhapermission'))

@section('content')
    <x-forms.patch :action="route('admin.modelhapermission.update', $modelhapermission)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Modelhapermission')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.modelhapermission.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="permission_id" class="col-md-2 col-form-label">@lang('permission_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="permission_id" class="form-control" placeholder="{{  __('permission_id') }} " value="{{   $modelhapermission->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="model_id" class="col-md-2 col-form-label">@lang('model_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="model_id" class="form-control" placeholder="{{  __('model_id') }} " value="{{   $modelhapermission->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="model_type" class="col-md-2 col-form-label">@lang('model_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="model_type" class="form-control" placeholder="{{  __('model_type') }} " value="{{   $modelhapermission->title }}  "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Modelhapermission')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection