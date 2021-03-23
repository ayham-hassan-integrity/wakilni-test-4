@extends('backend.layouts.app')

@section('title', __('View Submission'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Submission')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.submission.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $submission->id }}</td>
                </tr>
                <tr>
                    <th>@lang('amount')</th>
                    <td>{{   $submission->amount }}</td>
                </tr>
                <tr>
                    <th>@lang('corrected_amount')</th>
                    <td>{{   $submission->corrected_amount }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $submission->type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('driver_submission_id')</th>
                    <td>{{   $submission->driver_submission_id }}</td>
                </tr>
                <tr>
                    <th>@lang('currency_id')</th>
                    <td>{{   $submission->currency_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Submission Created'):</strong> @displayDate($submission->created_at) ({{   $submission->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($submission->updated_at) ({{   $submission->updated_at->diffForHumans() }})

                @if($submission->trashed())
                    <strong>@lang('Submission Deleted'):</strong> @displayDate($submission->deleted_at) ({{   $submission->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection