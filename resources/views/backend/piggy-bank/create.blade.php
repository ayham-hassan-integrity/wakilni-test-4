@extends('backend.layouts.app')

@section('title', __('Create Piggybank'))

@section('content')
    <x-forms.post :action="route('admin.piggybank.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Piggybank')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.piggybank.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="note" class="col-md-2 col-form-label">@lang('note')</label>

                    <div class="col-md-10">
                        <input type="text" name="note" class="form-control" placeholder="{{  __('note') }} " value="{{  old('note') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="start_date" class="col-md-2 col-form-label">@lang('start_date')</label>

                    <div class="col-md-10">
                        <input type="text" name="start_date" class="form-control" placeholder="{{  __('start_date') }} " value="{{  old('start_date') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="end_date" class="col-md-2 col-form-label">@lang('end_date')</label>

                    <div class="col-md-10">
                        <input type="text" name="end_date" class="form-control" placeholder="{{  __('end_date') }} " value="{{  old('end_date') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="status" class="col-md-2 col-form-label">@lang('status')</label>

                    <div class="col-md-10">
                        <input type="text" name="status" class="form-control" placeholder="{{  __('status') }} " value="{{  old('status') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_id" class="col-md-2 col-form-label">@lang('customer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_id" class="form-control" placeholder="{{  __('customer_id') }} " value="{{  old('customer_id') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Piggybank')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection