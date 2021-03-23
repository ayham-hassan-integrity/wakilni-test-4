@extends('backend.layouts.app')

@section('title', __('Deleted Drivers'))

@section('breadcrumb-links')
    @include('backend.driver.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Drivers')
        </x-slot>

        <x-slot name="body">
            <livewire:driver-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection