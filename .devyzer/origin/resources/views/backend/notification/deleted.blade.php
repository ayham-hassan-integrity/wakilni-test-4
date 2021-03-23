@extends('backend.layouts.app')

@section('title', __('Deleted Notifications'))

@section('breadcrumb-links')
    @include('backend.notification.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Notifications')
        </x-slot>

        <x-slot name="body">
            <livewire:notification-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection