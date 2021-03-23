@extends('backend.layouts.app')

@section('title', __('View Driverzone'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Driverzone')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.driverzone.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $driverzone->id }}</td>
                </tr>
                <tr>
                    <th>@lang('zone_id')</th>
                    <td>{{   $driverzone->zone_id }}</td>
                </tr>
                <tr>
                    <th>@lang('driver_id')</th>
                    <td>{{   $driverzone->driver_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Driverzone Created'):</strong> @displayDate($driverzone->created_at) ({{   $driverzone->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($driverzone->updated_at) ({{   $driverzone->updated_at->diffForHumans() }})

                @if($driverzone->trashed())
                    <strong>@lang('Driverzone Deleted'):</strong> @displayDate($driverzone->deleted_at) ({{   $driverzone->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection