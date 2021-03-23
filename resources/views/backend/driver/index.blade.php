@extends('backend.layouts.app')

@section('title', __(' Drivers'))

@section('breadcrumb-links')
    @include('backend.driver.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Drivers')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.driver.create')"
                :text="__('Create Driver')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:driver-table/>
        </x-slot>
    </x-backend.card>
@endsection