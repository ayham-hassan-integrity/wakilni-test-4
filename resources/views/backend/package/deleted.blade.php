@extends('backend.layouts.app')

@section('title', __('Deleted Packages'))

@section('breadcrumb-links')
    @include('backend.package.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Packages')
        </x-slot>

        <x-slot name="body">
            <livewire:package-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection