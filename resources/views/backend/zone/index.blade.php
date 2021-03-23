@extends('backend.layouts.app')

@section('title', __(' Zones'))

@section('breadcrumb-links')
    @include('backend.zone.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Zones')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.zone.create')"
                :text="__('Create Zone')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:zone-table/>
        </x-slot>
    </x-backend.card>
@endsection