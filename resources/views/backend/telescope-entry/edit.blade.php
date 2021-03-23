@extends('backend.layouts.app')

@section('title', __('Update Telescopeentry'))

@section('content')
    <x-forms.patch :action="route('admin.telescopeentry.update', $telescopeentry)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Telescopeentry')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.telescopeentry.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="sequence" class="col-md-2 col-form-label">@lang('sequence')</label>

                    <div class="col-md-10">
                        <input type="text" name="sequence" class="form-control" placeholder="{{  __('sequence') }} " value="{{   $telescopeentry->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="uuid" class="col-md-2 col-form-label">@lang('uuid')</label>

                    <div class="col-md-10">
                        <input type="text" name="uuid" class="form-control" placeholder="{{  __('uuid') }} " value="{{   $telescopeentry->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="batch_id" class="col-md-2 col-form-label">@lang('batch_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="batch_id" class="form-control" placeholder="{{  __('batch_id') }} " value="{{   $telescopeentry->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="family_hash" class="col-md-2 col-form-label">@lang('family_hash')</label>

                    <div class="col-md-10">
                        <input type="text" name="family_hash" class="form-control" placeholder="{{  __('family_hash') }} " value="{{   $telescopeentry->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="should_display_on_index" class="col-md-2 col-form-label">@lang('should_display_on_index')</label>

                    <div class="col-md-10">
                        <input type="text" name="should_display_on_index" class="form-control" placeholder="{{  __('should_display_on_index') }} " value="{{   $telescopeentry->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type" class="col-md-2 col-form-label">@lang('type')</label>

                    <div class="col-md-10">
                        <input type="text" name="type" class="form-control" placeholder="{{  __('type') }} " value="{{   $telescopeentry->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="content" class="col-md-2 col-form-label">@lang('content')</label>

                    <div class="col-md-10">
                        <input type="text" name="content" class="form-control" placeholder="{{  __('content') }} " value="{{   $telescopeentry->title }}  "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Telescopeentry')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection