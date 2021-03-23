@extends('backend.layouts.app')

@section('title', __('Create Currency'))

@section('content')
    <x-forms.post :action="route('admin.currency.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Currency')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.currency.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="title" class="col-md-2 col-form-label">@lang('title')</label>

                    <div class="col-md-10">
                        <input type="text" name="title" class="form-control" placeholder="{{  __('title') }} " value="{{  old('title') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="symbol_left" class="col-md-2 col-form-label">@lang('symbol_left')</label>

                    <div class="col-md-10">
                        <input type="text" name="symbol_left" class="form-control" placeholder="{{  __('symbol_left') }} " value="{{  old('symbol_left') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="symbol_right" class="col-md-2 col-form-label">@lang('symbol_right')</label>

                    <div class="col-md-10">
                        <input type="text" name="symbol_right" class="form-control" placeholder="{{  __('symbol_right') }} " value="{{  old('symbol_right') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="code" class="col-md-2 col-form-label">@lang('code')</label>

                    <div class="col-md-10">
                        <input type="text" name="code" class="form-control" placeholder="{{  __('code') }} " value="{{  old('code') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="exchange_rate" class="col-md-2 col-form-label">@lang('exchange_rate')</label>

                    <div class="col-md-10">
                        <input type="text" name="exchange_rate" class="form-control" placeholder="{{  __('exchange_rate') }} " value="{{  old('exchange_rate') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Currency')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection