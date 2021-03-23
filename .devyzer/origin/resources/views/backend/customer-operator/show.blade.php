@extends('backend.layouts.app')

@section('title', __('View Customeroperator'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Customeroperator')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.customeroperator.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $customeroperator->id }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_id')</th>
                    <td>{{   $customeroperator->customer_id }}</td>
                </tr>
                <tr>
                    <th>@lang('operator_id')</th>
                    <td>{{   $customeroperator->operator_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Customeroperator Created'):</strong> @displayDate($customeroperator->created_at) ({{   $customeroperator->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($customeroperator->updated_at) ({{   $customeroperator->updated_at->diffForHumans() }})

                @if($customeroperator->trashed())
                    <strong>@lang('Customeroperator Deleted'):</strong> @displayDate($customeroperator->deleted_at) ({{   $customeroperator->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection