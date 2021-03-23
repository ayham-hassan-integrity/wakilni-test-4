@extends('backend.layouts.app')

@section('title', __('View Amount'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Amount')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.amount.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $amount->id }}</td>
                </tr>
                <tr>
                    <th>@lang('amount')</th>
                    <td>{{   $amount->amount }}</td>
                </tr>
                <tr>
                    <th>@lang('piggy_bank_id')</th>
                    <td>{{   $amount->piggy_bank_id }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $amount->type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('currency_id')</th>
                    <td>{{   $amount->currency_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Amount Created'):</strong> @displayDate($amount->created_at) ({{   $amount->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($amount->updated_at) ({{   $amount->updated_at->diffForHumans() }})

                @if($amount->trashed())
                    <strong>@lang('Amount Deleted'):</strong> @displayDate($amount->deleted_at) ({{   $amount->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection