@extends('backend.layouts.app')

@section('title', __('View Driversubmission'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Driversubmission')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.driversubmission.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $driversubmission->id }}</td>
                </tr>
                <tr>
                    <th>@lang('goal_amount')</th>
                    <td>{{   $driversubmission->goal_amount }}</td>
                </tr>
                <tr>
                    <th>@lang('note')</th>
                    <td>{{   $driversubmission->note }}</td>
                </tr>
                <tr>
                    <th>@lang('status')</th>
                    <td>{{   $driversubmission->status }}</td>
                </tr>
                <tr>
                    <th>@lang('driver_id')</th>
                    <td>{{   $driversubmission->driver_id }}</td>
                </tr>
                <tr>
                    <th>@lang('operator_note')</th>
                    <td>{{   $driversubmission->operator_note }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Driversubmission Created'):</strong> @displayDate($driversubmission->created_at) ({{   $driversubmission->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($driversubmission->updated_at) ({{   $driversubmission->updated_at->diffForHumans() }})

                @if($driversubmission->trashed())
                    <strong>@lang('Driversubmission Deleted'):</strong> @displayDate($driversubmission->deleted_at) ({{   $driversubmission->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection