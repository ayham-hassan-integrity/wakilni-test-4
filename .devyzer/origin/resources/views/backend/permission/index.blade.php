@extends('backend.layouts.app')

@section('title', __(' Permissions'))

@section('breadcrumb-links')
    @include('backend.permission.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Permissions')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.permission.create')"
                :text="__('Create Permission')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:permission-table/>
        </x-slot>
    </x-backend.card>
@endsection