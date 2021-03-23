@extends('backend.layouts.app')

@section('title', __('View Orderdetail'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Orderdetail')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.orderdetail.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $orderdetail->id }}</td>
                </tr>
                <tr>
                    <th>@lang('collection_amount')</th>
                    <td>{{   $orderdetail->collection_amount }}</td>
                </tr>
                <tr>
                    <th>@lang('note')</th>
                    <td>{{   $orderdetail->note }}</td>
                </tr>
                <tr>
                    <th>@lang('preferred_sender_date')</th>
                    <td>{{   $orderdetail->preferred_sender_date }}</td>
                </tr>
                <tr>
                    <th>@lang('preferred_sender_from_time')</th>
                    <td>{{   $orderdetail->preferred_sender_from_time }}</td>
                </tr>
                <tr>
                    <th>@lang('preferred_sender_to_time')</th>
                    <td>{{   $orderdetail->preferred_sender_to_time }}</td>
                </tr>
                <tr>
                    <th>@lang('preferred_receiver_date')</th>
                    <td>{{   $orderdetail->preferred_receiver_date }}</td>
                </tr>
                <tr>
                    <th>@lang('preferred_receiver_from_time')</th>
                    <td>{{   $orderdetail->preferred_receiver_from_time }}</td>
                </tr>
                <tr>
                    <th>@lang('preferred_receiver_to_time')</th>
                    <td>{{   $orderdetail->preferred_receiver_to_time }}</td>
                </tr>
                <tr>
                    <th>@lang('require_signature')</th>
                    <td>{{   $orderdetail->require_signature }}</td>
                </tr>
                <tr>
                    <th>@lang('require_picture')</th>
                    <td>{{   $orderdetail->require_picture }}</td>
                </tr>
                <tr>
                    <th>@lang('same_package')</th>
                    <td>{{   $orderdetail->same_package }}</td>
                </tr>
                <tr>
                    <th>@lang('senderable_id')</th>
                    <td>{{   $orderdetail->senderable_id }}</td>
                </tr>
                <tr>
                    <th>@lang('senderable_type')</th>
                    <td>{{   $orderdetail->senderable_type }}</td>
                </tr>
                <tr>
                    <th>@lang('receiverable_id')</th>
                    <td>{{   $orderdetail->receiverable_id }}</td>
                </tr>
                <tr>
                    <th>@lang('receiverable_type')</th>
                    <td>{{   $orderdetail->receiverable_type }}</td>
                </tr>
                <tr>
                    <th>@lang('payment_type_id')</th>
                    <td>{{   $orderdetail->payment_type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('cash_collection_type_id')</th>
                    <td>{{   $orderdetail->cash_collection_type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_id')</th>
                    <td>{{   $orderdetail->customer_id }}</td>
                </tr>
                <tr>
                    <th>@lang('piggy_bank_id')</th>
                    <td>{{   $orderdetail->piggy_bank_id }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $orderdetail->type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('sender_location_id')</th>
                    <td>{{   $orderdetail->sender_location_id }}</td>
                </tr>
                <tr>
                    <th>@lang('receiver_location_id')</th>
                    <td>{{   $orderdetail->receiver_location_id }}</td>
                </tr>
                <tr>
                    <th>@lang('collection_currency')</th>
                    <td>{{   $orderdetail->collection_currency }}</td>
                </tr>
                <tr>
                    <th>@lang('store_id')</th>
                    <td>{{   $orderdetail->store_id }}</td>
                </tr>
                <tr>
                    <th>@lang('app_token_id')</th>
                    <td>{{   $orderdetail->app_token_id }}</td>
                </tr>
                <tr>
                    <th>@lang('app_ref_id')</th>
                    <td>{{   $orderdetail->app_ref_id }}</td>
                </tr>
                <tr>
                    <th>@lang('fulfillment_id')</th>
                    <td>{{   $orderdetail->fulfillment_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Orderdetail Created'):</strong> @displayDate($orderdetail->created_at) ({{   $orderdetail->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($orderdetail->updated_at) ({{   $orderdetail->updated_at->diffForHumans() }})

                @if($orderdetail->trashed())
                    <strong>@lang('Orderdetail Deleted'):</strong> @displayDate($orderdetail->deleted_at) ({{   $orderdetail->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection