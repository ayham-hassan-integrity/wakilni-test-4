@extends('backend.layouts.app')

@section('title', __('View Currency'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Currency')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.currency.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $currency->id }}</td>
                </tr>
                <tr>
                    <th>@lang('title')</th>
                    <td>{{   $currency->title }}</td>
                </tr>
                <tr>
                    <th>@lang('symbol_left')</th>
                    <td>{{   $currency->symbol_left }}</td>
                </tr>
                <tr>
                    <th>@lang('symbol_right')</th>
                    <td>{{   $currency->symbol_right }}</td>
                </tr>
                <tr>
                    <th>@lang('code')</th>
                    <td>{{   $currency->code }}</td>
                </tr>
                <tr>
                    <th>@lang('exchange_rate')</th>
                    <td>{{   $currency->exchange_rate }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Currency Created'):</strong> @displayDate($currency->created_at) ({{   $currency->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($currency->updated_at) ({{   $currency->updated_at->diffForHumans() }})

                @if($currency->trashed())
                    <strong>@lang('Currency Deleted'):</strong> @displayDate($currency->deleted_at) ({{   $currency->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection