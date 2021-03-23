@extends('backend.layouts.app')

@section('title', __('Update Order'))

@section('content')
    <x-forms.patch :action="route('admin.order.update', $order)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Order')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.order.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="order_number" class="col-md-2 col-form-label">@lang('order_number')</label>

                    <div class="col-md-10">
                        <input type="text" name="order_number" class="form-control" placeholder="{{  __('order_number') }} " value="{{   $order->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="rate" class="col-md-2 col-form-label">@lang('rate')</label>

                    <div class="col-md-10">
                        <input type="text" name="rate" class="form-control" placeholder="{{  __('rate') }} " value="{{   $order->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="completed_on" class="col-md-2 col-form-label">@lang('completed_on')</label>

                    <div class="col-md-10">
                        <input type="text" name="completed_on" class="form-control" placeholder="{{  __('completed_on') }} " value="{{   $order->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="payment_status" class="col-md-2 col-form-label">@lang('payment_status')</label>

                    <div class="col-md-10">
                        <input type="text" name="payment_status" class="form-control" placeholder="{{  __('payment_status') }} " value="{{   $order->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="package_status" class="col-md-2 col-form-label">@lang('package_status')</label>

                    <div class="col-md-10">
                        <input type="text" name="package_status" class="form-control" placeholder="{{  __('package_status') }} " value="{{   $order->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="status" class="col-md-2 col-form-label">@lang('status')</label>

                    <div class="col-md-10">
                        <input type="text" name="status" class="form-control" placeholder="{{  __('status') }} " value="{{   $order->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="status_updated_at" class="col-md-2 col-form-label">@lang('status_updated_at')</label>

                    <div class="col-md-10">
                        <input type="text" name="status_updated_at" class="form-control" placeholder="{{  __('status_updated_at') }} " value="{{   $order->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="remaining_balance" class="col-md-2 col-form-label">@lang('remaining_balance')</label>

                    <div class="col-md-10">
                        <input type="text" name="remaining_balance" class="form-control" placeholder="{{  __('remaining_balance') }} " value="{{   $order->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="price" class="col-md-2 col-form-label">@lang('price')</label>

                    <div class="col-md-10">
                        <input type="text" name="price" class="form-control" placeholder="{{  __('price') }} " value="{{   $order->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="parent_id" class="col-md-2 col-form-label">@lang('parent_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="parent_id" class="form-control" placeholder="{{  __('parent_id') }} " value="{{   $order->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="order_details_id" class="col-md-2 col-form-label">@lang('order_details_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="order_details_id" class="form-control" placeholder="{{  __('order_details_id') }} " value="{{   $order->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="comment_id" class="col-md-2 col-form-label">@lang('comment_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="comment_id" class="form-control" placeholder="{{  __('comment_id') }} " value="{{   $order->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="waybill" class="col-md-2 col-form-label">@lang('waybill')</label>

                    <div class="col-md-10">
                        <input type="text" name="waybill" class="form-control" placeholder="{{  __('waybill') }} " value="{{   $order->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="allow_receiver_contact" class="col-md-2 col-form-label">@lang('allow_receiver_contact')</label>

                    <div class="col-md-10">
                        <input type="text" name="allow_receiver_contact" class="form-control" placeholder="{{  __('allow_receiver_contact') }} " value="{{   $order->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="send_receiver_msg" class="col-md-2 col-form-label">@lang('send_receiver_msg')</label>

                    <div class="col-md-10">
                        <input type="text" name="send_receiver_msg" class="form-control" placeholder="{{  __('send_receiver_msg') }} " value="{{   $order->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="car_needed" class="col-md-2 col-form-label">@lang('car_needed')</label>

                    <div class="col-md-10">
                        <input type="text" name="car_needed" class="form-control" placeholder="{{  __('car_needed') }} " value="{{   $order->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="settled_with_wakilni" class="col-md-2 col-form-label">@lang('settled_with_wakilni')</label>

                    <div class="col-md-10">
                        <input type="text" name="settled_with_wakilni" class="form-control" placeholder="{{  __('settled_with_wakilni') }} " value="{{   $order->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="settled_with_customer" class="col-md-2 col-form-label">@lang('settled_with_customer')</label>

                    <div class="col-md-10">
                        <input type="text" name="settled_with_customer" class="form-control" placeholder="{{  __('settled_with_customer') }} " value="{{   $order->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="piggy_bank_submission_id" class="col-md-2 col-form-label">@lang('piggy_bank_submission_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="piggy_bank_submission_id" class="form-control" placeholder="{{  __('piggy_bank_submission_id') }} " value="{{   $order->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="active" class="col-md-2 col-form-label">@lang('active')</label>

                    <div class="col-md-10">
                        <input type="text" name="active" class="form-control" placeholder="{{  __('active') }} " value="{{   $order->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="is_critical" class="col-md-2 col-form-label">@lang('is_critical')</label>

                    <div class="col-md-10">
                        <input type="text" name="is_critical" class="form-control" placeholder="{{  __('is_critical') }} " value="{{   $order->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="become_critical_date" class="col-md-2 col-form-label">@lang('become_critical_date')</label>

                    <div class="col-md-10">
                        <input type="text" name="become_critical_date" class="form-control" placeholder="{{  __('become_critical_date') }} " value="{{   $order->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="confirmed_at" class="col-md-2 col-form-label">@lang('confirmed_at')</label>

                    <div class="col-md-10">
                        <input type="text" name="confirmed_at" class="form-control" placeholder="{{  __('confirmed_at') }} " value="{{   $order->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Order')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection