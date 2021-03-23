@extends('backend.layouts.app')

@section('title', __('Update Timesheet'))

@section('content')
    <x-forms.patch :action="route('admin.timesheet.update', $timesheet)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Timesheet')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.timesheet.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="from" class="col-md-2 col-form-label">@lang('from')</label>

                    <div class="col-md-10">
                        <input type="text" name="from" class="form-control" placeholder="{{  __('from') }} " value="{{   $timesheet->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="to" class="col-md-2 col-form-label">@lang('to')</label>

                    <div class="col-md-10">
                        <input type="text" name="to" class="form-control" placeholder="{{  __('to') }} " value="{{   $timesheet->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="note" class="col-md-2 col-form-label">@lang('note')</label>

                    <div class="col-md-10">
                        <input type="text" name="note" class="form-control" placeholder="{{  __('note') }} " value="{{   $timesheet->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="user_id" class="col-md-2 col-form-label">@lang('user_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="user_id" class="form-control" placeholder="{{  __('user_id') }} " value="{{   $timesheet->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="status" class="col-md-2 col-form-label">@lang('status')</label>

                    <div class="col-md-10">
                        <input type="text" name="status" class="form-control" placeholder="{{  __('status') }} " value="{{   $timesheet->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Timesheet')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection