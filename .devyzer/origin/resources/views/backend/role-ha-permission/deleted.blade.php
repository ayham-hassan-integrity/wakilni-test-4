@extends('backend.layouts.app')

@section('title', __('Deleted Rolehapermissions'))

@section('breadcrumb-links')
    @include('backend.role-ha-permission.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Rolehapermissions')
        </x-slot>

        <x-slot name="body">
            <livewire:rolehapermission-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection