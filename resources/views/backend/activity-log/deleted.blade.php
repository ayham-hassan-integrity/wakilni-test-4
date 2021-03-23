@extends('backend.layouts.app')

@section('title', __('Deleted Activitylogs'))

@section('breadcrumb-links')
    @include('backend.activity-log.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Activitylogs')
        </x-slot>

        <x-slot name="body">
            <livewire:activitylog-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection