@extends('backend.layouts.app')

@section('title', __('View Driverstock'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Driverstock')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.driverstock.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $driverstock->id }}</td>
                </tr>
                <tr>
                    <th>@lang('amount')</th>
                    <td>{{   $driverstock->amount }}</td>
                </tr>
                <tr>
                    <th>@lang('stock_id')</th>
                    <td>{{   $driverstock->stock_id }}</td>
                </tr>
                <tr>
                    <th>@lang('driver_id')</th>
                    <td>{{   $driverstock->driver_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Driverstock Created'):</strong> @displayDate($driverstock->created_at) ({{   $driverstock->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($driverstock->updated_at) ({{   $driverstock->updated_at->diffForHumans() }})

                @if($driverstock->trashed())
                    <strong>@lang('Driverstock Deleted'):</strong> @displayDate($driverstock->deleted_at) ({{   $driverstock->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection