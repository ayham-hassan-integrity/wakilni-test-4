@extends('backend.layouts.app')

@section('title', __('Deleted Roles'))

@section('breadcrumb-links')
    @include('backend.role.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Roles')
        </x-slot>

        <x-slot name="body">
            <livewire:role-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection