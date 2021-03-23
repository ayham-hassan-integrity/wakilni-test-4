@extends('backend.layouts.app')

@section('title', __('Deleted Drivervehicles'))

@section('breadcrumb-links')
    @include('backend.driver-vehicle.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Drivervehicles')
        </x-slot>

        <x-slot name="body">
            <livewire:drivervehicle-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection