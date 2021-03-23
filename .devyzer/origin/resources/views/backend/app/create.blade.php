@extends('backend.layouts.app')

@section('title', __('Create App'))

@section('content')
    <x-forms.post :action="route('admin.app.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create App')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.app.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">@lang('name')</label>

                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control" placeholder="{{  __('name') }} " value="{{  old('name') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="public" class="col-md-2 col-form-label">@lang('public')</label>

                    <div class="col-md-10">
                        <input type="text" name="public" class="form-control" placeholder="{{  __('public') }} " value="{{  old('public') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="client_id" class="col-md-2 col-form-label">@lang('client_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="client_id" class="form-control" placeholder="{{  __('client_id') }} " value="{{  old('client_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="client_secret" class="col-md-2 col-form-label">@lang('client_secret')</label>

                    <div class="col-md-10">
                        <input type="text" name="client_secret" class="form-control" placeholder="{{  __('client_secret') }} " value="{{  old('client_secret') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="random_authentication" class="col-md-2 col-form-label">@lang('random_authentication')</label>

                    <div class="col-md-10">
                        <input type="text" name="random_authentication" class="form-control" placeholder="{{  __('random_authentication') }} " value="{{  old('random_authentication') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="in_house_development" class="col-md-2 col-form-label">@lang('in_house_development')</label>

                    <div class="col-md-10">
                        <input type="text" name="in_house_development" class="form-control" placeholder="{{  __('in_house_development') }} " value="{{  old('in_house_development') }} "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create App')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection