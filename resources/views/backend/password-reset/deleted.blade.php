@extends('backend.layouts.app')

@section('title', __('Deleted Passwordresets'))

@section('breadcrumb-links')
    @include('backend.password-reset.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Passwordresets')
        </x-slot>

        <x-slot name="body">
            <livewire:passwordreset-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection