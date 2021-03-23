@extends('backend.layouts.app')

@section('title', __('Deleted Telescopemonitorings'))

@section('breadcrumb-links')
    @include('backend.telescope-monitoring.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Telescopemonitorings')
        </x-slot>

        <x-slot name="body">
            <livewire:telescopemonitoring-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection