@extends('backend.layouts.app')

@section('title', __('Update Driversubmission'))

@section('content')
    <x-forms.patch :action="route('admin.driversubmission.update', $driversubmission)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Driversubmission')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.driversubmission.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="goal_amount" class="col-md-2 col-form-label">@lang('goal_amount')</label>

                    <div class="col-md-10">
                        <input type="text" name="goal_amount" class="form-control" placeholder="{{  __('goal_amount') }} " value="{{   $driversubmission->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="note" class="col-md-2 col-form-label">@lang('note')</label>

                    <div class="col-md-10">
                        <input type="text" name="note" class="form-control" placeholder="{{  __('note') }} " value="{{   $driversubmission->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="status" class="col-md-2 col-form-label">@lang('status')</label>

                    <div class="col-md-10">
                        <input type="text" name="status" class="form-control" placeholder="{{  __('status') }} " value="{{   $driversubmission->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="driver_id" class="col-md-2 col-form-label">@lang('driver_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="driver_id" class="form-control" placeholder="{{  __('driver_id') }} " value="{{   $driversubmission->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="operator_note" class="col-md-2 col-form-label">@lang('operator_note')</label>

                    <div class="col-md-10">
                        <input type="text" name="operator_note" class="form-control" placeholder="{{  __('operator_note') }} " value="{{   $driversubmission->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Driversubmission')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection