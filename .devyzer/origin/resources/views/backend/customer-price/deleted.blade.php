@extends('backend.layouts.app')

@section('title', __('Deleted Customerprices'))

@section('breadcrumb-links')
    @include('backend.customer-price.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Customerprices')
        </x-slot>

        <x-slot name="body">
            <livewire:customerprice-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection