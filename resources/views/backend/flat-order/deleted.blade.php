@extends('backend.layouts.app')

@section('title', __('Deleted Flatorders'))

@section('breadcrumb-links')
    @include('backend.flat-order.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Flatorders')
        </x-slot>

        <x-slot name="body">
            <livewire:flatorder-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection