@extends('backend.layouts.app')

@section('title', __(' Devices'))

@section('breadcrumb-links')
    @include('backend.device.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Devices')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.device.create')"
                :text="__('Create Device')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:device-table/>
        </x-slot>
    </x-backend.card>
@endsection