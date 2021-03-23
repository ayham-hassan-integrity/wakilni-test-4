@extends('backend.layouts.app')

@section('title', __('Create Task'))

@section('content')
    <x-forms.post :action="route('admin.task.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Task')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.task.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="sequence" class="col-md-2 col-form-label">@lang('sequence')</label>

                    <div class="col-md-10">
                        <input type="text" name="sequence" class="form-control" placeholder="{{  __('sequence') }} " value="{{  old('sequence') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="overall_sequence" class="col-md-2 col-form-label">@lang('overall_sequence')</label>

                    <div class="col-md-10">
                        <input type="text" name="overall_sequence" class="form-control" placeholder="{{  __('overall_sequence') }} " value="{{  old('overall_sequence') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="deliver_amount" class="col-md-2 col-form-label">@lang('deliver_amount')</label>

                    <div class="col-md-10">
                        <input type="text" name="deliver_amount" class="form-control" placeholder="{{  __('deliver_amount') }} " value="{{  old('deliver_amount') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receive_amount" class="col-md-2 col-form-label">@lang('receive_amount')</label>

                    <div class="col-md-10">
                        <input type="text" name="receive_amount" class="form-control" placeholder="{{  __('receive_amount') }} " value="{{  old('receive_amount') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="deliver_package" class="col-md-2 col-form-label">@lang('deliver_package')</label>

                    <div class="col-md-10">
                        <input type="text" name="deliver_package" class="form-control" placeholder="{{  __('deliver_package') }} " value="{{  old('deliver_package') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receive_package" class="col-md-2 col-form-label">@lang('receive_package')</label>

                    <div class="col-md-10">
                        <input type="text" name="receive_package" class="form-control" placeholder="{{  __('receive_package') }} " value="{{  old('receive_package') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="note" class="col-md-2 col-form-label">@lang('note')</label>

                    <div class="col-md-10">
                        <input type="text" name="note" class="form-control" placeholder="{{  __('note') }} " value="{{  old('note') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="fail_reason" class="col-md-2 col-form-label">@lang('fail_reason')</label>

                    <div class="col-md-10">
                        <input type="text" name="fail_reason" class="form-control" placeholder="{{  __('fail_reason') }} " value="{{  old('fail_reason') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="collection_note" class="col-md-2 col-form-label">@lang('collection_note')</label>

                    <div class="col-md-10">
                        <input type="text" name="collection_note" class="form-control" placeholder="{{  __('collection_note') }} " value="{{  old('collection_note') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="preferred_date" class="col-md-2 col-form-label">@lang('preferred_date')</label>

                    <div class="col-md-10">
                        <input type="text" name="preferred_date" class="form-control" placeholder="{{  __('preferred_date') }} " value="{{  old('preferred_date') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="preferred_from_time" class="col-md-2 col-form-label">@lang('preferred_from_time')</label>

                    <div class="col-md-10">
                        <input type="text" name="preferred_from_time" class="form-control" placeholder="{{  __('preferred_from_time') }} " value="{{  old('preferred_from_time') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="preferred_to_time" class="col-md-2 col-form-label">@lang('preferred_to_time')</label>

                    <div class="col-md-10">
                        <input type="text" name="preferred_to_time" class="form-control" placeholder="{{  __('preferred_to_time') }} " value="{{  old('preferred_to_time') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="collection_date" class="col-md-2 col-form-label">@lang('collection_date')</label>

                    <div class="col-md-10">
                        <input type="text" name="collection_date" class="form-control" placeholder="{{  __('collection_date') }} " value="{{  old('collection_date') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="require_signature" class="col-md-2 col-form-label">@lang('require_signature')</label>

                    <div class="col-md-10">
                        <input type="text" name="require_signature" class="form-control" placeholder="{{  __('require_signature') }} " value="{{  old('require_signature') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="status" class="col-md-2 col-form-label">@lang('status')</label>

                    <div class="col-md-10">
                        <input type="text" name="status" class="form-control" placeholder="{{  __('status') }} " value="{{  old('status') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="submitted" class="col-md-2 col-form-label">@lang('submitted')</label>

                    <div class="col-md-10">
                        <input type="text" name="submitted" class="form-control" placeholder="{{  __('submitted') }} " value="{{  old('submitted') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="secured" class="col-md-2 col-form-label">@lang('secured')</label>

                    <div class="col-md-10">
                        <input type="text" name="secured" class="form-control" placeholder="{{  __('secured') }} " value="{{  old('secured') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiverable_id" class="col-md-2 col-form-label">@lang('receiverable_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiverable_id" class="form-control" placeholder="{{  __('receiverable_id') }} " value="{{  old('receiverable_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiverable_type" class="col-md-2 col-form-label">@lang('receiverable_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiverable_type" class="form-control" placeholder="{{  __('receiverable_type') }} " value="{{  old('receiverable_type') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="order_id" class="col-md-2 col-form-label">@lang('order_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="order_id" class="form-control" placeholder="{{  __('order_id') }} " value="{{  old('order_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="location_id" class="col-md-2 col-form-label">@lang('location_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="location_id" class="form-control" placeholder="{{  __('location_id') }} " value="{{  old('location_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="driver_id" class="col-md-2 col-form-label">@lang('driver_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="driver_id" class="form-control" placeholder="{{  __('driver_id') }} " value="{{  old('driver_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{  old('type_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_id" class="col-md-2 col-form-label">@lang('customer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_id" class="form-control" placeholder="{{  __('customer_id') }} " value="{{  old('customer_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="store_id" class="col-md-2 col-form-label">@lang('store_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="store_id" class="form-control" placeholder="{{  __('store_id') }} " value="{{  old('store_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="require_picture" class="col-md-2 col-form-label">@lang('require_picture')</label>

                    <div class="col-md-10">
                        <input type="text" name="require_picture" class="form-control" placeholder="{{  __('require_picture') }} " value="{{  old('require_picture') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="picture_id" class="col-md-2 col-form-label">@lang('picture_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="picture_id" class="form-control" placeholder="{{  __('picture_id') }} " value="{{  old('picture_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="signature_id" class="col-md-2 col-form-label">@lang('signature_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="signature_id" class="form-control" placeholder="{{  __('signature_id') }} " value="{{  old('signature_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="driver_submission_id" class="col-md-2 col-form-label">@lang('driver_submission_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="driver_submission_id" class="form-control" placeholder="{{  __('driver_submission_id') }} " value="{{  old('driver_submission_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="piggy_bank_id" class="col-md-2 col-form-label">@lang('piggy_bank_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="piggy_bank_id" class="form-control" placeholder="{{  __('piggy_bank_id') }} " value="{{  old('piggy_bank_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="vehicle_id" class="col-md-2 col-form-label">@lang('vehicle_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="vehicle_id" class="form-control" placeholder="{{  __('vehicle_id') }} " value="{{  old('vehicle_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receive_price" class="col-md-2 col-form-label">@lang('receive_price')</label>

                    <div class="col-md-10">
                        <input type="text" name="receive_price" class="form-control" placeholder="{{  __('receive_price') }} " value="{{  old('receive_price') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="deliver_amount_currency_rate" class="col-md-2 col-form-label">@lang('deliver_amount_currency_rate')</label>

                    <div class="col-md-10">
                        <input type="text" name="deliver_amount_currency_rate" class="form-control" placeholder="{{  __('deliver_amount_currency_rate') }} " value="{{  old('deliver_amount_currency_rate') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receive_amount_currency_rate" class="col-md-2 col-form-label">@lang('receive_amount_currency_rate')</label>

                    <div class="col-md-10">
                        <input type="text" name="receive_amount_currency_rate" class="form-control" placeholder="{{  __('receive_amount_currency_rate') }} " value="{{  old('receive_amount_currency_rate') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="amount_currency" class="col-md-2 col-form-label">@lang('amount_currency')</label>

                    <div class="col-md-10">
                        <input type="text" name="amount_currency" class="form-control" placeholder="{{  __('amount_currency') }} " value="{{  old('amount_currency') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="price_currency" class="col-md-2 col-form-label">@lang('price_currency')</label>

                    <div class="col-md-10">
                        <input type="text" name="price_currency" class="form-control" placeholder="{{  __('price_currency') }} " value="{{  old('price_currency') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Task')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection