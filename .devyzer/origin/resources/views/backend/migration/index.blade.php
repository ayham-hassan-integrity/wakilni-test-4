@extends('backend.layouts.app')

@section('title', __(' Migrations'))

@section('breadcrumb-links')
    @include('backend.migration.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Migrations')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.migration.create')"
                :text="__('Create Migration')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:migration-table/>
        </x-slot>
    </x-backend.card>
@endsection