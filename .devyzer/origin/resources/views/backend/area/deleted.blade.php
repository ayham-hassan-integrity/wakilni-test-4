@extends('backend.layouts.app')

@section('title', __('Deleted Areas'))

@section('breadcrumb-links')
    @include('backend.area.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Areas')
        </x-slot>

        <x-slot name="body">
            <livewire:area-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection