@extends('backend.layouts.app')

@section('title', __('Deleted Storecurrencys'))

@section('breadcrumb-links')
    @include('backend.store-currency.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Storecurrencys')
        </x-slot>

        <x-slot name="body">
            <livewire:storecurrency-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection