@extends('backend.layouts.app')

@section('title', __(' Drivervehicles'))

@section('breadcrumb-links')
    @include('backend.driver-vehicle.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Drivervehicles')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.drivervehicle.create')"
                :text="__('Create Drivervehicle')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:drivervehicle-table/>
        </x-slot>
    </x-backend.card>
@endsection