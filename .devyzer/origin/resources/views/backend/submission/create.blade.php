@extends('backend.layouts.app')

@section('title', __('Create Submission'))

@section('content')
    <x-forms.post :action="route('admin.submission.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Submission')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.submission.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="amount" class="col-md-2 col-form-label">@lang('amount')</label>

                    <div class="col-md-10">
                        <input type="text" name="amount" class="form-control" placeholder="{{  __('amount') }} " value="{{  old('amount') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="corrected_amount" class="col-md-2 col-form-label">@lang('corrected_amount')</label>

                    <div class="col-md-10">
                        <input type="text" name="corrected_amount" class="form-control" placeholder="{{  __('corrected_amount') }} " value="{{  old('corrected_amount') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{  old('type_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="driver_submission_id" class="col-md-2 col-form-label">@lang('driver_submission_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="driver_submission_id" class="form-control" placeholder="{{  __('driver_submission_id') }} " value="{{  old('driver_submission_id') }} "  />
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
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Submission')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection