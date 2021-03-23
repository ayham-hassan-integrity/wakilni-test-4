@extends('backend.layouts.app')

@section('title', __(' Driverzones'))

@section('breadcrumb-links')
    @include('backend.driver-zone.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Driverzones')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.driverzone.create')"
                :text="__('Create Driverzone')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:driverzone-table/>
        </x-slot>
    </x-backend.card>
@endsection