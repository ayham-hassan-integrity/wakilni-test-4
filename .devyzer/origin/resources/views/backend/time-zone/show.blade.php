@extends('backend.layouts.app')

@section('title', __('View Timezone'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Timezone')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.timezone.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $timezone->id }}</td>
                </tr>
                <tr>
                    <th>@lang('zone')</th>
                    <td>{{   $timezone->zone }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Timezone Created'):</strong> @displayDate($timezone->created_at) ({{   $timezone->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($timezone->updated_at) ({{   $timezone->updated_at->diffForHumans() }})

                @if($timezone->trashed())
                    <strong>@lang('Timezone Deleted'):</strong> @displayDate($timezone->deleted_at) ({{   $timezone->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection