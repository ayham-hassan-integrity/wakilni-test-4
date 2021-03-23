@extends('backend.layouts.app')

@section('title', __('Deleted Settings'))

@section('breadcrumb-links')
    @include('backend.setting.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Settings')
        </x-slot>

        <x-slot name="body">
            <livewire:setting-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection