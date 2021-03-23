@extends('backend.layouts.app')

@section('title', __('View Vehicle'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Vehicle')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.vehicle.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $vehicle->id }}</td>
                </tr>
                <tr>
                    <th>@lang('count')</th>
                    <td>{{   $vehicle->count }}</td>
                </tr>
                <tr>
                    <th>@lang('remaining')</th>
                    <td>{{   $vehicle->remaining }}</td>
                </tr>
                <tr>
                    <th>@lang('maintenance')</th>
                    <td>{{   $vehicle->maintenance }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $vehicle->type_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Vehicle Created'):</strong> @displayDate($vehicle->created_at) ({{   $vehicle->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($vehicle->updated_at) ({{   $vehicle->updated_at->diffForHumans() }})

                @if($vehicle->trashed())
                    <strong>@lang('Vehicle Deleted'):</strong> @displayDate($vehicle->deleted_at) ({{   $vehicle->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection