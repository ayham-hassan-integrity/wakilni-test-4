@extends('backend.layouts.app')

@section('title', __('Deleted Barcodes'))

@section('breadcrumb-links')
    @include('backend.barcode.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Barcodes')
        </x-slot>

        <x-slot name="body">
            <livewire:barcode-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection