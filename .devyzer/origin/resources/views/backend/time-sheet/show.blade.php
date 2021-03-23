@extends('backend.layouts.app')

@section('title', __('View Timesheet'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Timesheet')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.timesheet.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $timesheet->id }}</td>
                </tr>
                <tr>
                    <th>@lang('from')</th>
                    <td>{{   $timesheet->from }}</td>
                </tr>
                <tr>
                    <th>@lang('to')</th>
                    <td>{{   $timesheet->to }}</td>
                </tr>
                <tr>
                    <th>@lang('note')</th>
                    <td>{{   $timesheet->note }}</td>
                </tr>
                <tr>
                    <th>@lang('user_id')</th>
                    <td>{{   $timesheet->user_id }}</td>
                </tr>
                <tr>
                    <th>@lang('status')</th>
                    <td>{{   $timesheet->status }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Timesheet Created'):</strong> @displayDate($timesheet->created_at) ({{   $timesheet->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($timesheet->updated_at) ({{   $timesheet->updated_at->diffForHumans() }})

                @if($timesheet->trashed())
                    <strong>@lang('Timesheet Deleted'):</strong> @displayDate($timesheet->deleted_at) ({{   $timesheet->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection