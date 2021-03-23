@extends('backend.layouts.app')

@section('title', __('Deleted Orders'))

@section('breadcrumb-links')
    @include('backend.order.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Orders')
        </x-slot>

        <x-slot name="body">
            <livewire:order-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection