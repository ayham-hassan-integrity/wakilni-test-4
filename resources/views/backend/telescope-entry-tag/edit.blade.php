@extends('backend.layouts.app')

@section('title', __('Update Telescopeentrytag'))

@section('content')
    <x-forms.patch :action="route('admin.telescopeentrytag.update', $telescopeentrytag)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Telescopeentrytag')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.telescopeentrytag.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="entry_uuid" class="col-md-2 col-form-label">@lang('entry_uuid')</label>

                    <div class="col-md-10">
                        <input type="text" name="entry_uuid" class="form-control" placeholder="{{  __('entry_uuid') }} " value="{{   $telescopeentrytag->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="tag" class="col-md-2 col-form-label">@lang('tag')</label>

                    <div class="col-md-10">
                        <input type="text" name="tag" class="form-control" placeholder="{{  __('tag') }} " value="{{   $telescopeentrytag->title }}  "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Telescopeentrytag')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection