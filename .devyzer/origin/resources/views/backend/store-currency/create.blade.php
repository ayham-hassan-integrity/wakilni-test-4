@extends('backend.layouts.app')

@section('title', __('Create Storecurrency'))

@section('content')
    <x-forms.post :action="route('admin.storecurrency.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Storecurrency')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.storecurrency.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="store_id" class="col-md-2 col-form-label">@lang('store_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="store_id" class="form-control" placeholder="{{  __('store_id') }} " value="{{  old('store_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="currency_id" class="col-md-2 col-form-label">@lang('currency_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="currency_id" class="form-control" placeholder="{{  __('currency_id') }} " value="{{  old('currency_id') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Storecurrency')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection