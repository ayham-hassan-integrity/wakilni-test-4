@extends('backend.layouts.app')

@section('title', __('Deleted Amounts'))

@section('breadcrumb-links')
    @include('backend.amount.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Amounts')
        </x-slot>

        <x-slot name="body">
            <livewire:amount-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection