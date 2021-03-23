@extends('backend.layouts.app')

@section('title', __(' Locations'))

@section('breadcrumb-links')
    @include('backend.location.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Locations')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.location.create')"
                :text="__('Create Location')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:location-table/>
        </x-slot>
    </x-backend.card>
@endsection