@extends('backend.layouts.app')

@section('title', __('Deleted Locations'))

@section('breadcrumb-links')
    @include('backend.location.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Locations')
        </x-slot>

        <x-slot name="body">
            <livewire:location-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection