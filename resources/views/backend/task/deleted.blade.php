@extends('backend.layouts.app')

@section('title', __('Deleted Tasks'))

@section('breadcrumb-links')
    @include('backend.task.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Tasks')
        </x-slot>

        <x-slot name="body">
            <livewire:task-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection