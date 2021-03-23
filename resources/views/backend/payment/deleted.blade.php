@extends('backend.layouts.app')

@section('title', __('Deleted Payments'))

@section('breadcrumb-links')
    @include('backend.payment.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Payments')
        </x-slot>

        <x-slot name="body">
            <livewire:payment-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection