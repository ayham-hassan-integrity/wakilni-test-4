@extends('backend.layouts.app')

@section('title', __('Deleted Failedjobs'))

@section('breadcrumb-links')
    @include('backend.failed-job.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Failedjobs')
        </x-slot>

        <x-slot name="body">
            <livewire:failedjob-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection