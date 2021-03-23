@extends('backend.layouts.app')

@section('title', __(' Driverstocks'))

@section('breadcrumb-links')
    @include('backend.driver-stock.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Driverstocks')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.driverstock.create')"
                :text="__('Create Driverstock')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:driverstock-table/>
        </x-slot>
    </x-backend.card>
@endsection