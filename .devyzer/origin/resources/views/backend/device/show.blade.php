@extends('backend.layouts.app')

@section('title', __('View Device'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Device')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.device.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $device->id }}</td>
                </tr>
                <tr>
                    <th>@lang('user_id')</th>
                    <td>{{   $device->user_id }}</td>
                </tr>
                <tr>
                    <th>@lang('type')</th>
                    <td>{{   $device->type }}</td>
                </tr>
                <tr>
                    <th>@lang('token')</th>
                    <td>{{   $device->token }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Device Created'):</strong> @displayDate($device->created_at) ({{   $device->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($device->updated_at) ({{   $device->updated_at->diffForHumans() }})

                @if($device->trashed())
                    <strong>@lang('Device Deleted'):</strong> @displayDate($device->deleted_at) ({{   $device->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection