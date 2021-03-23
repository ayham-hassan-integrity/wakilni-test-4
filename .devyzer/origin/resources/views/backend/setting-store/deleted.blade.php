@extends('backend.layouts.app')

@section('title', __('Deleted Settingstores'))

@section('breadcrumb-links')
    @include('backend.setting-store.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Settingstores')
        </x-slot>

        <x-slot name="body">
            <livewire:settingstore-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection