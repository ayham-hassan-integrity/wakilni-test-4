@extends('backend.layouts.app')

@section('title', __('Deleted Stores'))

@section('breadcrumb-links')
    @include('backend.store.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Stores')
        </x-slot>

        <x-slot name="body">
            <livewire:store-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection