@extends('backend.layouts.app')

@section('title', __('Deleted Devices'))

@section('breadcrumb-links')
    @include('backend.device.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Devices')
        </x-slot>

        <x-slot name="body">
            <livewire:device-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection