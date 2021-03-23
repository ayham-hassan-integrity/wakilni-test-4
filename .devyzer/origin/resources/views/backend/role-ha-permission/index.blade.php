@extends('backend.layouts.app')

@section('title', __(' Rolehapermissions'))

@section('breadcrumb-links')
    @include('backend.role-ha-permission.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Rolehapermissions')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.rolehapermission.create')"
                :text="__('Create Rolehapermission')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:rolehapermission-table/>
        </x-slot>
    </x-backend.card>
@endsection