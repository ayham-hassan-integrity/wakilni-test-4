@extends('backend.layouts.app')

@section('title', __('Deleted Locationlogs'))

@section('breadcrumb-links')
    @include('backend.location-log.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Locationlogs')
        </x-slot>

        <x-slot name="body">
            <livewire:locationlog-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection