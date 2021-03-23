@extends('backend.layouts.app')

@section('title', __('Deleted Permissions'))

@section('breadcrumb-links')
    @include('backend.permission.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Permissions')
        </x-slot>

        <x-slot name="body">
            <livewire:permission-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection