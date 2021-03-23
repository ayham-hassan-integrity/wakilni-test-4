@extends('backend.layouts.app')

@section('title', __('Deleted Vehicles'))

@section('breadcrumb-links')
    @include('backend.vehicle.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Vehicles')
        </x-slot>

        <x-slot name="body">
            <livewire:vehicle-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection