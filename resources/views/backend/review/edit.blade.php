@extends('backend.layouts.app')

@section('title', __('Update Review'))

@section('content')
    <x-forms.patch :action="route('admin.review.update', $review)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Review')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.review.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="order_id" class="col-md-2 col-form-label">@lang('order_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="order_id" class="form-control" placeholder="{{  __('order_id') }} " value="{{   $review->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_id" class="col-md-2 col-form-label">@lang('customer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_id" class="form-control" placeholder="{{  __('customer_id') }} " value="{{   $review->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="recipient_id" class="col-md-2 col-form-label">@lang('recipient_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="recipient_id" class="form-control" placeholder="{{  __('recipient_id') }} " value="{{   $review->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="rate" class="col-md-2 col-form-label">@lang('rate')</label>

                    <div class="col-md-10">
                        <input type="text" name="rate" class="form-control" placeholder="{{  __('rate') }} " value="{{   $review->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="feedback_message" class="col-md-2 col-form-label">@lang('feedback_message')</label>

                    <div class="col-md-10">
                        <input type="text" name="feedback_message" class="form-control" placeholder="{{  __('feedback_message') }} " value="{{   $review->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="viewed" class="col-md-2 col-form-label">@lang('viewed')</label>

                    <div class="col-md-10">
                        <input type="text" name="viewed" class="form-control" placeholder="{{  __('viewed') }} " value="{{   $review->title }}  "  required   />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Review')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection