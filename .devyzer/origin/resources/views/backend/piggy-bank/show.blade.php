@extends('backend.layouts.app')

@section('title', __('View Piggybank'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Piggybank')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.piggybank.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $piggybank->id }}</td>
                </tr>
                <tr>
                    <th>@lang('note')</th>
                    <td>{{   $piggybank->note }}</td>
                </tr>
                <tr>
                    <th>@lang('start_date')</th>
                    <td>{{   $piggybank->start_date }}</td>
                </tr>
                <tr>
                    <th>@lang('end_date')</th>
                    <td>{{   $piggybank->end_date }}</td>
                </tr>
                <tr>
                    <th>@lang('status')</th>
                    <td>{{   $piggybank->status }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_id')</th>
                    <td>{{   $piggybank->customer_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Piggybank Created'):</strong> @displayDate($piggybank->created_at) ({{   $piggybank->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($piggybank->updated_at) ({{   $piggybank->updated_at->diffForHumans() }})

                @if($piggybank->trashed())
                    <strong>@lang('Piggybank Deleted'):</strong> @displayDate($piggybank->deleted_at) ({{   $piggybank->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection