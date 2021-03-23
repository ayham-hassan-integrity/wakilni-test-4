@extends('backend.layouts.app')

@section('title', __('View Notification'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Notification')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.notification.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $notification->id }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $notification->type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('notifiable_id')</th>
                    <td>{{   $notification->notifiable_id }}</td>
                </tr>
                <tr>
                    <th>@lang('notifiable_type')</th>
                    <td>{{   $notification->notifiable_type }}</td>
                </tr>
                <tr>
                    <th>@lang('data')</th>
                    <td>{{   $notification->data }}</td>
                </tr>
                <tr>
                    <th>@lang('read_at')</th>
                    <td>{{   $notification->read_at }}</td>
                </tr>
                <tr>
                    <th>@lang('objectable_id')</th>
                    <td>{{   $notification->objectable_id }}</td>
                </tr>
                <tr>
                    <th>@lang('objectable_type')</th>
                    <td>{{   $notification->objectable_type }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Notification Created'):</strong> @displayDate($notification->created_at) ({{   $notification->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($notification->updated_at) ({{   $notification->updated_at->diffForHumans() }})

                @if($notification->trashed())
                    <strong>@lang('Notification Deleted'):</strong> @displayDate($notification->deleted_at) ({{   $notification->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection