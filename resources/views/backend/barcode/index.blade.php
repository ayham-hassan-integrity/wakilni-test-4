@extends('backend.layouts.app')

@section('title', __(' Barcodes'))

@section('breadcrumb-links')
    @include('backend.barcode.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Barcodes')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.barcode.create')"
                :text="__('Create Barcode')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:barcode-table/>
        </x-slot>
    </x-backend.card>
@endsection