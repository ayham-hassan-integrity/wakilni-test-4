@extends('backend.layouts.app')

@section('title', __('View Driver'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Driver')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.driver.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $driver->id }}</td>
                </tr>
                <tr>
                    <th>@lang('nationality')</th>
                    <td>{{   $driver->nationality }}</td>
                </tr>
                <tr>
                    <th>@lang('color')</th>
                    <td>{{   $driver->color }}</td>
                </tr>
                <tr>
                    <th>@lang('has_gps')</th>
                    <td>{{   $driver->has_gps }}</td>
                </tr>
                <tr>
                    <th>@lang('has_internet')</th>
                    <td>{{   $driver->has_internet }}</td>
                </tr>
                <tr>
                    <th>@lang('status')</th>
                    <td>{{   $driver->status }}</td>
                </tr>
                <tr>
                    <th>@lang('user_id')</th>
                    <td>{{   $driver->user_id }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $driver->type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('now_driving')</th>
                    <td>{{   $driver->now_driving }}</td>
                </tr>
                <tr>
                    <th>@lang('is_active')</th>
                    <td>{{   $driver->is_active }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Driver Created'):</strong> @displayDate($driver->created_at) ({{   $driver->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($driver->updated_at) ({{   $driver->updated_at->diffForHumans() }})

                @if($driver->trashed())
                    <strong>@lang('Driver Deleted'):</strong> @displayDate($driver->deleted_at) ({{   $driver->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection