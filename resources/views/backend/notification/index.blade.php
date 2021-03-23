@extends('backend.layouts.app')

@section('title', __(' Notifications'))

@section('breadcrumb-links')
    @include('backend.notification.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Notifications')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.notification.create')"
                :text="__('Create Notification')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:notification-table/>
        </x-slot>
    </x-backend.card>
@endsection