@extends('backend.layouts.app')

@section('title', __('View Barcode'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Barcode')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.barcode.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $barcode->id }}</td>
                </tr>
                <tr>
                    <th>@lang('status')</th>
                    <td>{{   $barcode->status }}</td>
                </tr>
                <tr>
                    <th>@lang('barcode_order_number')</th>
                    <td>{{   $barcode->barcode_order_number }}</td>
                </tr>
                <tr>
                    <th>@lang('pickup_order_id')</th>
                    <td>{{   $barcode->pickup_order_id }}</td>
                </tr>
                <tr>
                    <th>@lang('pickup_task_id')</th>
                    <td>{{   $barcode->pickup_task_id }}</td>
                </tr>
                <tr>
                    <th>@lang('pickup_driver_id')</th>
                    <td>{{   $barcode->pickup_driver_id }}</td>
                </tr>
                <tr>
                    <th>@lang('delivery_order_id')</th>
                    <td>{{   $barcode->delivery_order_id }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_id')</th>
                    <td>{{   $barcode->customer_id }}</td>
                </tr>
                <tr>
                    <th>@lang('scanned_at')</th>
                    <td>{{   $barcode->scanned_at }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Barcode Created'):</strong> @displayDate($barcode->created_at) ({{   $barcode->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($barcode->updated_at) ({{   $barcode->updated_at->diffForHumans() }})

                @if($barcode->trashed())
                    <strong>@lang('Barcode Deleted'):</strong> @displayDate($barcode->deleted_at) ({{   $barcode->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection