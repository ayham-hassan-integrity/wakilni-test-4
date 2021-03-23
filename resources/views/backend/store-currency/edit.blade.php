@extends('backend.layouts.app')

@section('title', __('Update Storecurrency'))

@section('content')
    <x-forms.patch :action="route('admin.storecurrency.update', $storecurrency)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Storecurrency')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.storecurrency.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="store_id" class="col-md-2 col-form-label">@lang('store_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="store_id" class="form-control" placeholder="{{  __('store_id') }} " value="{{   $storecurrency->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="currency_id" class="col-md-2 col-form-label">@lang('currency_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="currency_id" class="form-control" placeholder="{{  __('currency_id') }} " value="{{   $storecurrency->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Storecurrency')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection