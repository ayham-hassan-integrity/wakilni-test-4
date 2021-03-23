@extends('backend.layouts.app')

@section('title', __('View Route'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Route')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.route.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $route->id }}</td>
                </tr>
                <tr>
                    <th>@lang('route')</th>
                    <td>{{   $route->route }}</td>
                </tr>
                <tr>
                    <th>@lang('km/day')</th>
                    <td>{{   $route->km/day }}</td>
                </tr>
                <tr>
                    <th>@lang('today')</th>
                    <td>{{   $route->today }}</td>
                </tr>
                <tr>
                    <th>@lang('driver_id')</th>
                    <td>{{   $route->driver_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Route Created'):</strong> @displayDate($route->created_at) ({{   $route->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($route->updated_at) ({{   $route->updated_at->diffForHumans() }})

                @if($route->trashed())
                    <strong>@lang('Route Deleted'):</strong> @displayDate($route->deleted_at) ({{   $route->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection