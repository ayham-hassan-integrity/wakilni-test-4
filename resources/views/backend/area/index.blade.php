@extends('backend.layouts.app')

@section('title', __(' Areas'))

@section('breadcrumb-links')
    @include('backend.area.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Areas')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.area.create')"
                :text="__('Create Area')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:area-table/>
        </x-slot>
    </x-backend.card>
@endsection