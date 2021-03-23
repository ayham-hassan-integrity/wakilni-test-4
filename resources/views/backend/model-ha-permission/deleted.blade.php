@extends('backend.layouts.app')

@section('title', __('Deleted Modelhapermissions'))

@section('breadcrumb-links')
    @include('backend.model-ha-permission.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Modelhapermissions')
        </x-slot>

        <x-slot name="body">
            <livewire:modelhapermission-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection