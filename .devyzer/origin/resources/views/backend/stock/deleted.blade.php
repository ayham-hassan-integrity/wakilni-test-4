@extends('backend.layouts.app')

@section('title', __('Deleted Stocks'))

@section('breadcrumb-links')
    @include('backend.stock.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Stocks')
        </x-slot>

        <x-slot name="body">
            <livewire:stock-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection