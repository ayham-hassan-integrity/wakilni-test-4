@extends('backend.layouts.app')

@section('title', __('View Activitylog'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Activitylog')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.activitylog.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $activitylog->id }}</td>
                </tr>
                <tr>
                    <th>@lang('log_name')</th>
                    <td>{{   $activitylog->log_name }}</td>
                </tr>
                <tr>
                    <th>@lang('description')</th>
                    <td>{{   $activitylog->description }}</td>
                </tr>
                <tr>
                    <th>@lang('subject_id')</th>
                    <td>{{   $activitylog->subject_id }}</td>
                </tr>
                <tr>
                    <th>@lang('subject_type')</th>
                    <td>{{   $activitylog->subject_type }}</td>
                </tr>
                <tr>
                    <th>@lang('causer_id')</th>
                    <td>{{   $activitylog->causer_id }}</td>
                </tr>
                <tr>
                    <th>@lang('causer_type')</th>
                    <td>{{   $activitylog->causer_type }}</td>
                </tr>
                <tr>
                    <th>@lang('properties')</th>
                    <td>{{   $activitylog->properties }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Activitylog Created'):</strong> @displayDate($activitylog->created_at) ({{   $activitylog->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($activitylog->updated_at) ({{   $activitylog->updated_at->diffForHumans() }})

                @if($activitylog->trashed())
                    <strong>@lang('Activitylog Deleted'):</strong> @displayDate($activitylog->deleted_at) ({{   $activitylog->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection