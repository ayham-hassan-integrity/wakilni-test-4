@extends('backend.layouts.app')

@section('title', __('Create File'))

@section('content')
    <x-forms.post :action="route('admin.file.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create File')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.file.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="mime" class="col-md-2 col-form-label">@lang('mime')</label>

                    <div class="col-md-10">
                        <input type="text" name="mime" class="form-control" placeholder="{{  __('mime') }} " value="{{  old('mime') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="filename" class="col-md-2 col-form-label">@lang('filename')</label>

                    <div class="col-md-10">
                        <input type="text" name="filename" class="form-control" placeholder="{{  __('filename') }} " value="{{  old('filename') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="size" class="col-md-2 col-form-label">@lang('size')</label>

                    <div class="col-md-10">
                        <input type="text" name="size" class="form-control" placeholder="{{  __('size') }} " value="{{  old('size') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="storage_path" class="col-md-2 col-form-label">@lang('storage_path')</label>

                    <div class="col-md-10">
                        <input type="text" name="storage_path" class="form-control" placeholder="{{  __('storage_path') }} " value="{{  old('storage_path') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="disk" class="col-md-2 col-form-label">@lang('disk')</label>

                    <div class="col-md-10">
                        <input type="text" name="disk" class="form-control" placeholder="{{  __('disk') }} " value="{{  old('disk') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="status" class="col-md-2 col-form-label">@lang('status')</label>

                    <div class="col-md-10">
                        <input type="text" name="status" class="form-control" placeholder="{{  __('status') }} " value="{{  old('status') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="fileable_id" class="col-md-2 col-form-label">@lang('fileable_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="fileable_id" class="form-control" placeholder="{{  __('fileable_id') }} " value="{{  old('fileable_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="fileable_type" class="col-md-2 col-form-label">@lang('fileable_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="fileable_type" class="form-control" placeholder="{{  __('fileable_type') }} " value="{{  old('fileable_type') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create File')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection