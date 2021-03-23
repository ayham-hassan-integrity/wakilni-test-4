@extends('backend.layouts.app')

@section('title', __('Create Review'))

@section('content')
    <x-forms.post :action="route('admin.review.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Review')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.review.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="order_id" class="col-md-2 col-form-label">@lang('order_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="order_id" class="form-control" placeholder="{{  __('order_id') }} " value="{{  old('order_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_id" class="col-md-2 col-form-label">@lang('customer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_id" class="form-control" placeholder="{{  __('customer_id') }} " value="{{  old('customer_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="recipient_id" class="col-md-2 col-form-label">@lang('recipient_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="recipient_id" class="form-control" placeholder="{{  __('recipient_id') }} " value="{{  old('recipient_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="rate" class="col-md-2 col-form-label">@lang('rate')</label>

                    <div class="col-md-10">
                        <input type="text" name="rate" class="form-control" placeholder="{{  __('rate') }} " value="{{  old('rate') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="feedback_message" class="col-md-2 col-form-label">@lang('feedback_message')</label>

                    <div class="col-md-10">
                        <input type="text" name="feedback_message" class="form-control" placeholder="{{  __('feedback_message') }} " value="{{  old('feedback_message') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="viewed" class="col-md-2 col-form-label">@lang('viewed')</label>

                    <div class="col-md-10">
                        <input type="text" name="viewed" class="form-control" placeholder="{{  __('viewed') }} " value="{{  old('viewed') }} "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Review')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection