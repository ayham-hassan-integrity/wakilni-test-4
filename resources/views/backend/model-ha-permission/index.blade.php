@extends('backend.layouts.app')

@section('title', __(' Modelhapermissions'))

@section('breadcrumb-links')
    @include('backend.model-ha-permission.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Modelhapermissions')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.modelhapermission.create')"
                :text="__('Create Modelhapermission')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:modelhapermission-table/>
        </x-slot>
    </x-backend.card>
@endsection