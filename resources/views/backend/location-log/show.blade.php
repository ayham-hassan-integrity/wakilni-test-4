@extends('backend.layouts.app')

@section('title', __('View Locationlog'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Locationlog')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.locationlog.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $locationlog->id }}</td>
                </tr>
                <tr>
                    <th>@lang('data')</th>
                    <td>{{   $locationlog->data }}</td>
                </tr>
                <tr>
                    <th>@lang('location_id')</th>
                    <td>{{   $locationlog->location_id }}</td>
                </tr>
                <tr>
                    <th>@lang('driver_id')</th>
                    <td>{{   $locationlog->driver_id }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $locationlog->type_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Locationlog Created'):</strong> @displayDate($locationlog->created_at) ({{   $locationlog->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($locationlog->updated_at) ({{   $locationlog->updated_at->diffForHumans() }})

                @if($locationlog->trashed())
                    <strong>@lang('Locationlog Deleted'):</strong> @displayDate($locationlog->deleted_at) ({{   $locationlog->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection