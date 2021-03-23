@extends('backend.layouts.app')

@section('title', __(' Roles'))

@section('breadcrumb-links')
    @include('backend.role.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Roles')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.role.create')"
                :text="__('Create Role')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:role-table/>
        </x-slot>
    </x-backend.card>
@endsection