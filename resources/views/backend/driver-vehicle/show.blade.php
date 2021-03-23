@extends('backend.layouts.app')

@section('title', __('View Drivervehicle'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Drivervehicle')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.drivervehicle.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $drivervehicle->id }}</td>
                </tr>
                <tr>
                    <th>@lang('vehicle_id')</th>
                    <td>{{   $drivervehicle->vehicle_id }}</td>
                </tr>
                <tr>
                    <th>@lang('driver_id')</th>
                    <td>{{   $drivervehicle->driver_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Drivervehicle Created'):</strong> @displayDate($drivervehicle->created_at) ({{   $drivervehicle->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($drivervehicle->updated_at) ({{   $drivervehicle->updated_at->diffForHumans() }})

                @if($drivervehicle->trashed())
                    <strong>@lang('Drivervehicle Deleted'):</strong> @displayDate($drivervehicle->deleted_at) ({{   $drivervehicle->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection