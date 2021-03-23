@extends('backend.layouts.app')

@section('title', __(' Telescopemonitorings'))

@section('breadcrumb-links')
    @include('backend.telescope-monitoring.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Telescopemonitorings')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.telescopemonitoring.create')"
                :text="__('Create Telescopemonitoring')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:telescopemonitoring-table/>
        </x-slot>
    </x-backend.card>
@endsection