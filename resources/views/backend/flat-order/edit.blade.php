@extends('backend.layouts.app')

@section('title', __('Update Flatorder'))

@section('content')
    <x-forms.patch :action="route('admin.flatorder.update', $flatorder)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Flatorder')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.flatorder.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="order_number" class="col-md-2 col-form-label">@lang('order_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="order_number" class="form-control" placeholder="{{  __('order_number') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="waybill" class="col-md-2 col-form-label">@lang('waybill')</label>

                    <div class="col-md-10">
                        <input type="text" name="waybill" class="form-control" placeholder="{{  __('waybill') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="parent_id" class="col-md-2 col-form-label">@lang('parent_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="parent_id" class="form-control" placeholder="{{  __('parent_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="order_id" class="col-md-2 col-form-label">@lang('order_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="order_id" class="form-control" placeholder="{{  __('order_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="order_details_id" class="col-md-2 col-form-label">@lang('order_details_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="order_details_id" class="form-control" placeholder="{{  __('order_details_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="rate" class="col-md-2 col-form-label">@lang('rate')</label>

                    <div class="col-md-10">
                        <input type="text" name="rate" class="form-control" placeholder="{{  __('rate') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="status" class="col-md-2 col-form-label">@lang('status')</label>

                    <div class="col-md-10">
                        <input type="text" name="status" class="form-control" placeholder="{{  __('status') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="payment_status" class="col-md-2 col-form-label">@lang('payment_status')</label>

                    <div class="col-md-10">
                        <input type="text" name="payment_status" class="form-control" placeholder="{{  __('payment_status') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="package_status" class="col-md-2 col-form-label">@lang('package_status')</label>

                    <div class="col-md-10">
                        <input type="text" name="package_status" class="form-control" placeholder="{{  __('package_status') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="remaining_balance" class="col-md-2 col-form-label">@lang('remaining_balance')</label>

                    <div class="col-md-10">
                        <input type="text" name="remaining_balance" class="form-control" placeholder="{{  __('remaining_balance') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="price" class="col-md-2 col-form-label">@lang('price')</label>

                    <div class="col-md-10">
                        <input type="text" name="price" class="form-control" placeholder="{{  __('price') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="payment_type_id" class="col-md-2 col-form-label">@lang('payment_type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="payment_type_id" class="form-control" placeholder="{{  __('payment_type_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="price_currency_id" class="col-md-2 col-form-label">@lang('price_currency_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="price_currency_id" class="form-control" placeholder="{{  __('price_currency_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="price_currency_exchange_rate" class="col-md-2 col-form-label">@lang('price_currency_exchange_rate')</label>

                    <div class="col-md-10">
                        <input type="text" name="price_currency_exchange_rate" class="form-control" placeholder="{{  __('price_currency_exchange_rate') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="collection_amount" class="col-md-2 col-form-label">@lang('collection_amount')</label>

                    <div class="col-md-10">
                        <input type="text" name="collection_amount" class="form-control" placeholder="{{  __('collection_amount') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="collection_type_id" class="col-md-2 col-form-label">@lang('collection_type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="collection_type_id" class="form-control" placeholder="{{  __('collection_type_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="collection_currency_id" class="col-md-2 col-form-label">@lang('collection_currency_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="collection_currency_id" class="form-control" placeholder="{{  __('collection_currency_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="collection_currency_exchange_rate" class="col-md-2 col-form-label">@lang('collection_currency_exchange_rate')</label>

                    <div class="col-md-10">
                        <input type="text" name="collection_currency_exchange_rate" class="form-control" placeholder="{{  __('collection_currency_exchange_rate') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="comment_id" class="col-md-2 col-form-label">@lang('comment_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="comment_id" class="form-control" placeholder="{{  __('comment_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="important_comment_text" class="col-md-2 col-form-label">@lang('important_comment_text')</label>

                    <div class="col-md-10">
                        <input type="text" name="important_comment_text" class="form-control" placeholder="{{  __('important_comment_text') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="comments_count" class="col-md-2 col-form-label">@lang('comments_count')</label>

                    <div class="col-md-10">
                        <input type="text" name="comments_count" class="form-control" placeholder="{{  __('comments_count') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="allow_receiver_contact" class="col-md-2 col-form-label">@lang('allow_receiver_contact')</label>

                    <div class="col-md-10">
                        <input type="text" name="allow_receiver_contact" class="form-control" placeholder="{{  __('allow_receiver_contact') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="send_receiver_msg" class="col-md-2 col-form-label">@lang('send_receiver_msg')</label>

                    <div class="col-md-10">
                        <input type="text" name="send_receiver_msg" class="form-control" placeholder="{{  __('send_receiver_msg') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="car_needed" class="col-md-2 col-form-label">@lang('car_needed')</label>

                    <div class="col-md-10">
                        <input type="text" name="car_needed" class="form-control" placeholder="{{  __('car_needed') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="settled_with_wakilni" class="col-md-2 col-form-label">@lang('settled_with_wakilni')</label>

                    <div class="col-md-10">
                        <input type="text" name="settled_with_wakilni" class="form-control" placeholder="{{  __('settled_with_wakilni') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="settled_with_customer" class="col-md-2 col-form-label">@lang('settled_with_customer')</label>

                    <div class="col-md-10">
                        <input type="text" name="settled_with_customer" class="form-control" placeholder="{{  __('settled_with_customer') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="active" class="col-md-2 col-form-label">@lang('active')</label>

                    <div class="col-md-10">
                        <input type="text" name="active" class="form-control" placeholder="{{  __('active') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="is_critical" class="col-md-2 col-form-label">@lang('is_critical')</label>

                    <div class="col-md-10">
                        <input type="text" name="is_critical" class="form-control" placeholder="{{  __('is_critical') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="require_signature" class="col-md-2 col-form-label">@lang('require_signature')</label>

                    <div class="col-md-10">
                        <input type="text" name="require_signature" class="form-control" placeholder="{{  __('require_signature') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="require_picture" class="col-md-2 col-form-label">@lang('require_picture')</label>

                    <div class="col-md-10">
                        <input type="text" name="require_picture" class="form-control" placeholder="{{  __('require_picture') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="same_package" class="col-md-2 col-form-label">@lang('same_package')</label>

                    <div class="col-md-10">
                        <input type="text" name="same_package" class="form-control" placeholder="{{  __('same_package') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="piggy_bank_submission_id" class="col-md-2 col-form-label">@lang('piggy_bank_submission_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="piggy_bank_submission_id" class="form-control" placeholder="{{  __('piggy_bank_submission_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="completed_on" class="col-md-2 col-form-label">@lang('completed_on')</label>

                    <div class="col-md-10">
                        <input type="text" name="completed_on" class="form-control" placeholder="{{  __('completed_on') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="status_updated_at" class="col-md-2 col-form-label">@lang('status_updated_at')</label>

                    <div class="col-md-10">
                        <input type="text" name="status_updated_at" class="form-control" placeholder="{{  __('status_updated_at') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="become_critical_date" class="col-md-2 col-form-label">@lang('become_critical_date')</label>

                    <div class="col-md-10">
                        <input type="text" name="become_critical_date" class="form-control" placeholder="{{  __('become_critical_date') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="confirmed_at" class="col-md-2 col-form-label">@lang('confirmed_at')</label>

                    <div class="col-md-10">
                        <input type="text" name="confirmed_at" class="form-control" placeholder="{{  __('confirmed_at') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="note" class="col-md-2 col-form-label">@lang('note')</label>

                    <div class="col-md-10">
                        <input type="text" name="note" class="form-control" placeholder="{{  __('note') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="preferred_sender_date" class="col-md-2 col-form-label">@lang('preferred_sender_date')</label>

                    <div class="col-md-10">
                        <input type="text" name="preferred_sender_date" class="form-control" placeholder="{{  __('preferred_sender_date') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="preferred_sender_from_time" class="col-md-2 col-form-label">@lang('preferred_sender_from_time')</label>

                    <div class="col-md-10">
                        <input type="text" name="preferred_sender_from_time" class="form-control" placeholder="{{  __('preferred_sender_from_time') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="preferred_sender_to_time" class="col-md-2 col-form-label">@lang('preferred_sender_to_time')</label>

                    <div class="col-md-10">
                        <input type="text" name="preferred_sender_to_time" class="form-control" placeholder="{{  __('preferred_sender_to_time') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="preferred_receiver_date" class="col-md-2 col-form-label">@lang('preferred_receiver_date')</label>

                    <div class="col-md-10">
                        <input type="text" name="preferred_receiver_date" class="form-control" placeholder="{{  __('preferred_receiver_date') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="preferred_receiver_from_time" class="col-md-2 col-form-label">@lang('preferred_receiver_from_time')</label>

                    <div class="col-md-10">
                        <input type="text" name="preferred_receiver_from_time" class="form-control" placeholder="{{  __('preferred_receiver_from_time') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="preferred_receiver_to_time" class="col-md-2 col-form-label">@lang('preferred_receiver_to_time')</label>

                    <div class="col-md-10">
                        <input type="text" name="preferred_receiver_to_time" class="form-control" placeholder="{{  __('preferred_receiver_to_time') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="senderable_id" class="col-md-2 col-form-label">@lang('senderable_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="senderable_id" class="form-control" placeholder="{{  __('senderable_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="senderable_type" class="col-md-2 col-form-label">@lang('senderable_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="senderable_type" class="form-control" placeholder="{{  __('senderable_type') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="senderable_name" class="col-md-2 col-form-label">@lang('senderable_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="senderable_name" class="form-control" placeholder="{{  __('senderable_name') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="senderable_phone_number" class="col-md-2 col-form-label">@lang('senderable_phone_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="senderable_phone_number" class="form-control" placeholder="{{  __('senderable_phone_number') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="senderable_secondary_phone_number" class="col-md-2 col-form-label">@lang('senderable_secondary_phone_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="senderable_secondary_phone_number" class="form-control" placeholder="{{  __('senderable_secondary_phone_number') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiverable_id" class="col-md-2 col-form-label">@lang('receiverable_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiverable_id" class="form-control" placeholder="{{  __('receiverable_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiverable_type" class="col-md-2 col-form-label">@lang('receiverable_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiverable_type" class="form-control" placeholder="{{  __('receiverable_type') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiverable_name" class="col-md-2 col-form-label">@lang('receiverable_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiverable_name" class="form-control" placeholder="{{  __('receiverable_name') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiverable_phone_number" class="col-md-2 col-form-label">@lang('receiverable_phone_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiverable_phone_number" class="form-control" placeholder="{{  __('receiverable_phone_number') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiverable_secondary_phone_number" class="col-md-2 col-form-label">@lang('receiverable_secondary_phone_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiverable_secondary_phone_number" class="form-control" placeholder="{{  __('receiverable_secondary_phone_number') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="sender_location_id" class="col-md-2 col-form-label">@lang('sender_location_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="sender_location_id" class="form-control" placeholder="{{  __('sender_location_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="sender_location_label" class="col-md-2 col-form-label">@lang('sender_location_label')</label>

                    <div class="col-md-10">
                        <input type="text" name="sender_location_label" class="form-control" placeholder="{{  __('sender_location_label') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="sender_area_id" class="col-md-2 col-form-label">@lang('sender_area_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="sender_area_id" class="form-control" placeholder="{{  __('sender_area_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="sender_area_label" class="col-md-2 col-form-label">@lang('sender_area_label')</label>

                    <div class="col-md-10">
                        <input type="text" name="sender_area_label" class="form-control" placeholder="{{  __('sender_area_label') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="sender_zone_id" class="col-md-2 col-form-label">@lang('sender_zone_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="sender_zone_id" class="form-control" placeholder="{{  __('sender_zone_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="sender_zone_label" class="col-md-2 col-form-label">@lang('sender_zone_label')</label>

                    <div class="col-md-10">
                        <input type="text" name="sender_zone_label" class="form-control" placeholder="{{  __('sender_zone_label') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiver_location_id" class="col-md-2 col-form-label">@lang('receiver_location_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiver_location_id" class="form-control" placeholder="{{  __('receiver_location_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiver_location_label" class="col-md-2 col-form-label">@lang('receiver_location_label')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiver_location_label" class="form-control" placeholder="{{  __('receiver_location_label') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiver_area_id" class="col-md-2 col-form-label">@lang('receiver_area_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiver_area_id" class="form-control" placeholder="{{  __('receiver_area_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiver_area_label" class="col-md-2 col-form-label">@lang('receiver_area_label')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiver_area_label" class="form-control" placeholder="{{  __('receiver_area_label') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiver_zone_id" class="col-md-2 col-form-label">@lang('receiver_zone_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiver_zone_id" class="form-control" placeholder="{{  __('receiver_zone_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiver_zone_label" class="col-md-2 col-form-label">@lang('receiver_zone_label')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiver_zone_label" class="form-control" placeholder="{{  __('receiver_zone_label') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="task_scheduled_date" class="col-md-2 col-form-label">@lang('task_scheduled_date')</label>

                    <div class="col-md-10">
                        <input type="text" name="task_scheduled_date" class="form-control" placeholder="{{  __('task_scheduled_date') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="task_scheduled_from_time" class="col-md-2 col-form-label">@lang('task_scheduled_from_time')</label>

                    <div class="col-md-10">
                        <input type="text" name="task_scheduled_from_time" class="form-control" placeholder="{{  __('task_scheduled_from_time') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="task_scheduled_to_time" class="col-md-2 col-form-label">@lang('task_scheduled_to_time')</label>

                    <div class="col-md-10">
                        <input type="text" name="task_scheduled_to_time" class="form-control" placeholder="{{  __('task_scheduled_to_time') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="task_driver_id" class="col-md-2 col-form-label">@lang('task_driver_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="task_driver_id" class="form-control" placeholder="{{  __('task_driver_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="task_driver_user_id" class="col-md-2 col-form-label">@lang('task_driver_user_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="task_driver_user_id" class="form-control" placeholder="{{  __('task_driver_user_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="task_driver_contact_id" class="col-md-2 col-form-label">@lang('task_driver_contact_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="task_driver_contact_id" class="form-control" placeholder="{{  __('task_driver_contact_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="task_driver_user_name" class="col-md-2 col-form-label">@lang('task_driver_user_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="task_driver_user_name" class="form-control" placeholder="{{  __('task_driver_user_name') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="task_driver_user_phone_number" class="col-md-2 col-form-label">@lang('task_driver_user_phone_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="task_driver_user_phone_number" class="form-control" placeholder="{{  __('task_driver_user_phone_number') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="task_driver_user_is_active" class="col-md-2 col-form-label">@lang('task_driver_user_is_active')</label>

                    <div class="col-md-10">
                        <input type="text" name="task_driver_user_is_active" class="form-control" placeholder="{{  __('task_driver_user_is_active') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="last_task_driver_id" class="col-md-2 col-form-label">@lang('last_task_driver_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="last_task_driver_id" class="form-control" placeholder="{{  __('last_task_driver_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="last_task_driver_user_id" class="col-md-2 col-form-label">@lang('last_task_driver_user_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="last_task_driver_user_id" class="form-control" placeholder="{{  __('last_task_driver_user_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="last_task_driver_contact_id" class="col-md-2 col-form-label">@lang('last_task_driver_contact_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="last_task_driver_contact_id" class="form-control" placeholder="{{  __('last_task_driver_contact_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="last_task_driver_user_name" class="col-md-2 col-form-label">@lang('last_task_driver_user_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="last_task_driver_user_name" class="form-control" placeholder="{{  __('last_task_driver_user_name') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="last_task_driver_user_phone_number" class="col-md-2 col-form-label">@lang('last_task_driver_user_phone_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="last_task_driver_user_phone_number" class="form-control" placeholder="{{  __('last_task_driver_user_phone_number') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="last_task_driver_user_is_active" class="col-md-2 col-form-label">@lang('last_task_driver_user_is_active')</label>

                    <div class="col-md-10">
                        <input type="text" name="last_task_driver_user_is_active" class="form-control" placeholder="{{  __('last_task_driver_user_is_active') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="packages" class="col-md-2 col-form-label">@lang('packages')</label>

                    <div class="col-md-10">
                        <input type="text" name="packages" class="form-control" placeholder="{{  __('packages') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_id" class="col-md-2 col-form-label">@lang('customer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_id" class="form-control" placeholder="{{  __('customer_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_name" class="col-md-2 col-form-label">@lang('customer_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_name" class="form-control" placeholder="{{  __('customer_name') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_golden_rule" class="col-md-2 col-form-label">@lang('customer_golden_rule')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_golden_rule" class="form-control" placeholder="{{  __('customer_golden_rule') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_is_active" class="col-md-2 col-form-label">@lang('customer_is_active')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_is_active" class="form-control" placeholder="{{  __('customer_is_active') }} " value="{{   $flatorder->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_account_manager_id" class="col-md-2 col-form-label">@lang('customer_account_manager_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_account_manager_id" class="form-control" placeholder="{{  __('customer_account_manager_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_industry_id" class="col-md-2 col-form-label">@lang('customer_industry_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_industry_id" class="form-control" placeholder="{{  __('customer_industry_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_user_id" class="col-md-2 col-form-label">@lang('customer_user_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_user_id" class="form-control" placeholder="{{  __('customer_user_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_user_name" class="col-md-2 col-form-label">@lang('customer_user_name')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_user_name" class="form-control" placeholder="{{  __('customer_user_name') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="piggy_bank_id" class="col-md-2 col-form-label">@lang('piggy_bank_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="piggy_bank_id" class="form-control" placeholder="{{  __('piggy_bank_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="store_id" class="col-md-2 col-form-label">@lang('store_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="store_id" class="form-control" placeholder="{{  __('store_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="app_token_id" class="col-md-2 col-form-label">@lang('app_token_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="app_token_id" class="form-control" placeholder="{{  __('app_token_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="app_ref_id" class="col-md-2 col-form-label">@lang('app_ref_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="app_ref_id" class="form-control" placeholder="{{  __('app_ref_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="fulfillment_id" class="col-md-2 col-form-label">@lang('fulfillment_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="fulfillment_id" class="form-control" placeholder="{{  __('fulfillment_id') }} " value="{{   $flatorder->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Flatorder')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection