@extends('backend.layouts.app')

@section('title', __('Deleted Timezones'))

@section('breadcrumb-links')
    @include('backend.time-zone.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Timezones')
        </x-slot>

        <x-slot name="body">
            <livewire:timezone-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection