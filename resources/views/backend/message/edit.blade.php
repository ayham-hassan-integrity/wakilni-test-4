@extends('backend.layouts.app')

@section('title', __('Update Message'))

@section('content')
    <x-forms.patch :action="route('admin.message.update', $message)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Message')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.message.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="title" class="col-md-2 col-form-label">@lang('title')</label>

                    <div class="col-md-10">
                        <input type="text" name="title" class="form-control" placeholder="{{  __('title') }} " value="{{   $message->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="message" class="col-md-2 col-form-label">@lang('message')</label>

                    <div class="col-md-10">
                        <input type="text" name="message" class="form-control" placeholder="{{  __('message') }} " value="{{   $message->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="status" class="col-md-2 col-form-label">@lang('status')</label>

                    <div class="col-md-10">
                        <input type="text" name="status" class="form-control" placeholder="{{  __('status') }} " value="{{   $message->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiver_id" class="col-md-2 col-form-label">@lang('receiver_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiver_id" class="form-control" placeholder="{{  __('receiver_id') }} " value="{{   $message->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="sender_id" class="col-md-2 col-form-label">@lang('sender_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="sender_id" class="form-control" placeholder="{{  __('sender_id') }} " value="{{   $message->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="content_type_id" class="col-md-2 col-form-label">@lang('content_type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="content_type_id" class="form-control" placeholder="{{  __('content_type_id') }} " value="{{   $message->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{   $message->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="location_id" class="col-md-2 col-form-label">@lang('location_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="location_id" class="form-control" placeholder="{{  __('location_id') }} " value="{{   $message->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Message')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection