@extends('backend.layouts.app')

@section('title', __('View Customercurrency'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Customercurrency')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.customercurrency.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $customercurrency->id }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_id')</th>
                    <td>{{   $customercurrency->customer_id }}</td>
                </tr>
                <tr>
                    <th>@lang('currency_id')</th>
                    <td>{{   $customercurrency->currency_id }}</td>
                </tr>
                <tr>
                    <th>@lang('exchange_rate')</th>
                    <td>{{   $customercurrency->exchange_rate }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Customercurrency Created'):</strong> @displayDate($customercurrency->created_at) ({{   $customercurrency->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($customercurrency->updated_at) ({{   $customercurrency->updated_at->diffForHumans() }})

                @if($customercurrency->trashed())
                    <strong>@lang('Customercurrency Deleted'):</strong> @displayDate($customercurrency->deleted_at) ({{   $customercurrency->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection