@extends('backend.layouts.app')

@section('title', __('Deleted Driversubmissions'))

@section('breadcrumb-links')
    @include('backend.driver-submission.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Driversubmissions')
        </x-slot>

        <x-slot name="body">
            <livewire:driversubmission-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection