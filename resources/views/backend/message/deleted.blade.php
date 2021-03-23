@extends('backend.layouts.app')

@section('title', __('Deleted Messages'))

@section('breadcrumb-links')
    @include('backend.message.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Messages')
        </x-slot>

        <x-slot name="body">
            <livewire:message-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection