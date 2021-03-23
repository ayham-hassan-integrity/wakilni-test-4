@extends('backend.layouts.app')

@section('title', __('View Payment'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Payment')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.payment.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $payment->id }}</td>
                </tr>
                <tr>
                    <th>@lang('order_id')</th>
                    <td>{{   $payment->order_id }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_id')</th>
                    <td>{{   $payment->customer_id }}</td>
                </tr>
                <tr>
                    <th>@lang('piggy_bank_id')</th>
                    <td>{{   $payment->piggy_bank_id }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $payment->type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('amount')</th>
                    <td>{{   $payment->amount }}</td>
                </tr>
                <tr>
                    <th>@lang('currency_id')</th>
                    <td>{{   $payment->currency_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Payment Created'):</strong> @displayDate($payment->created_at) ({{   $payment->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($payment->updated_at) ({{   $payment->updated_at->diffForHumans() }})

                @if($payment->trashed())
                    <strong>@lang('Payment Deleted'):</strong> @displayDate($payment->deleted_at) ({{   $payment->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection