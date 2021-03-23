@extends('backend.layouts.app')

@section('title', __(' Modelharoles'))

@section('breadcrumb-links')
    @include('backend.model-ha-role.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Modelharoles')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.modelharole.create')"
                :text="__('Create Modelharole')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:modelharole-table/>
        </x-slot>
    </x-backend.card>
@endsection