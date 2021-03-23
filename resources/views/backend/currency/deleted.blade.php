@extends('backend.layouts.app')

@section('title', __('Deleted Currencys'))

@section('breadcrumb-links')
    @include('backend.currency.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Currencys')
        </x-slot>

        <x-slot name="body">
            <livewire:currency-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection