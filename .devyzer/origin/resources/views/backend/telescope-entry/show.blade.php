@extends('backend.layouts.app')

@section('title', __('View Telescopeentry'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Telescopeentry')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.telescopeentry.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('sequence')</th>
                    <td>{{   $telescopeentry->sequence }}</td>
                </tr>
                <tr>
                    <th>@lang('uuid')</th>
                    <td>{{   $telescopeentry->uuid }}</td>
                </tr>
                <tr>
                    <th>@lang('batch_id')</th>
                    <td>{{   $telescopeentry->batch_id }}</td>
                </tr>
                <tr>
                    <th>@lang('family_hash')</th>
                    <td>{{   $telescopeentry->family_hash }}</td>
                </tr>
                <tr>
                    <th>@lang('should_display_on_index')</th>
                    <td>{{   $telescopeentry->should_display_on_index }}</td>
                </tr>
                <tr>
                    <th>@lang('type')</th>
                    <td>{{   $telescopeentry->type }}</td>
                </tr>
                <tr>
                    <th>@lang('content')</th>
                    <td>{{   $telescopeentry->content }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Telescopeentry Created'):</strong> @displayDate($telescopeentry->created_at) ({{   $telescopeentry->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($telescopeentry->updated_at) ({{   $telescopeentry->updated_at->diffForHumans() }})

                @if($telescopeentry->trashed())
                    <strong>@lang('Telescopeentry Deleted'):</strong> @displayDate($telescopeentry->deleted_at) ({{   $telescopeentry->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection