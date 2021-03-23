@extends('backend.layouts.app')

@section('title', __(' Locationlogs'))

@section('breadcrumb-links')
    @include('backend.location-log.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Locationlogs')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.locationlog.create')"
                :text="__('Create Locationlog')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:locationlog-table/>
        </x-slot>
    </x-backend.card>
@endsection