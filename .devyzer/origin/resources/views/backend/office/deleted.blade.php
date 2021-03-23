@extends('backend.layouts.app')

@section('title', __('Deleted Offices'))

@section('breadcrumb-links')
    @include('backend.office.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Offices')
        </x-slot>

        <x-slot name="body">
            <livewire:office-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection