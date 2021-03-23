@extends('backend.layouts.app')

@section('title', __('Deleted Timesheets'))

@section('breadcrumb-links')
    @include('backend.time-sheet.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Timesheets')
        </x-slot>

        <x-slot name="body">
            <livewire:timesheet-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection