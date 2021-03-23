@extends('backend.layouts.app')

@section('title', __(' Vehicles'))

@section('breadcrumb-links')
    @include('backend.vehicle.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Vehicles')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.vehicle.create')"
                :text="__('Create Vehicle')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:vehicle-table/>
        </x-slot>
    </x-backend.card>
@endsection