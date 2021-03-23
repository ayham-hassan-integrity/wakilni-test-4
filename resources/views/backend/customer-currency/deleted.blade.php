@extends('backend.layouts.app')

@section('title', __('Deleted Customercurrencys'))

@section('breadcrumb-links')
    @include('backend.customer-currency.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Customercurrencys')
        </x-slot>

        <x-slot name="body">
            <livewire:customercurrency-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection