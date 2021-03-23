@extends('backend.layouts.app')

@section('title', __('Deleted Driverzones'))

@section('breadcrumb-links')
    @include('backend.driver-zone.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Driverzones')
        </x-slot>

        <x-slot name="body">
            <livewire:driverzone-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection