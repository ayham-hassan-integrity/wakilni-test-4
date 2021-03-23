@extends('backend.layouts.app')

@section('title', __('Update Comment'))

@section('content')
    <x-forms.patch :action="route('admin.comment.update', $comment)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Comment')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.comment.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="comment" class="col-md-2 col-form-label">@lang('comment')</label>

                    <div class="col-md-10">
                        <input type="text" name="comment" class="form-control" placeholder="{{  __('comment') }} " value="{{   $comment->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="is_public" class="col-md-2 col-form-label">@lang('is_public')</label>

                    <div class="col-md-10">
                        <input type="text" name="is_public" class="form-control" placeholder="{{  __('is_public') }} " value="{{   $comment->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="order_id" class="col-md-2 col-form-label">@lang('order_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="order_id" class="form-control" placeholder="{{  __('order_id') }} " value="{{   $comment->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="user_id" class="col-md-2 col-form-label">@lang('user_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="user_id" class="form-control" placeholder="{{  __('user_id') }} " value="{{   $comment->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Comment')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection