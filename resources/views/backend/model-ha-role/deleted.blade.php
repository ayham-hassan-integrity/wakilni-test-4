@extends('backend.layouts.app')

@section('title', __('Deleted Modelharoles'))

@section('breadcrumb-links')
    @include('backend.model-ha-role.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Modelharoles')
        </x-slot>

        <x-slot name="body">
            <livewire:modelharole-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection