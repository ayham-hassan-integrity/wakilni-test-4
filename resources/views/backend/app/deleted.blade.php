@extends('backend.layouts.app')

@section('title', __('Deleted Apps'))

@section('breadcrumb-links')
    @include('backend.app.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Apps')
        </x-slot>

        <x-slot name="body">
            <livewire:app-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection