@extends('backend.layouts.app')

@section('title', __('Deleted Driverstocks'))

@section('breadcrumb-links')
    @include('backend.driver-stock.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Driverstocks')
        </x-slot>

        <x-slot name="body">
            <livewire:driverstock-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection