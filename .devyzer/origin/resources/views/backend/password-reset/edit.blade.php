@extends('backend.layouts.app')

@section('title', __('Update Passwordreset'))

@section('content')
    <x-forms.patch :action="route('admin.passwordreset.update', $passwordreset)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Passwordreset')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.passwordreset.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label">@lang('email')</label>

                    <div class="col-md-10">
                        <input type="text" name="email" class="form-control" placeholder="{{  __('email') }} " value="{{   $passwordreset->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="token" class="col-md-2 col-form-label">@lang('token')</label>

                    <div class="col-md-10">
                        <input type="text" name="token" class="form-control" placeholder="{{  __('token') }} " value="{{   $passwordreset->title }}  "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Passwordreset')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection