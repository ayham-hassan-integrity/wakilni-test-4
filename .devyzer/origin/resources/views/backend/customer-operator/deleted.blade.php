@extends('backend.layouts.app')

@section('title', __('Deleted Customeroperators'))

@section('breadcrumb-links')
    @include('backend.customer-operator.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Customeroperators')
        </x-slot>

        <x-slot name="body">
            <livewire:customeroperator-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection