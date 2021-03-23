@extends('backend.layouts.app')

@section('title', __('Deleted Zones'))

@section('breadcrumb-links')
    @include('backend.zone.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Zones')
        </x-slot>

        <x-slot name="body">
            <livewire:zone-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection