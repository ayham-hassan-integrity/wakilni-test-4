@extends('backend.layouts.app')

@section('title', __('Deleted Orderdetails'))

@section('breadcrumb-links')
    @include('backend.order-detail.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Orderdetails')
        </x-slot>

        <x-slot name="body">
            <livewire:orderdetail-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection