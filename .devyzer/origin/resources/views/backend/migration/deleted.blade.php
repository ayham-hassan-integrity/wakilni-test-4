@extends('backend.layouts.app')

@section('title', __('Deleted Migrations'))

@section('breadcrumb-links')
    @include('backend.migration.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Migrations')
        </x-slot>

        <x-slot name="body">
            <livewire:migration-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection