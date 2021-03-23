@extends('backend.layouts.app')

@section('title', __(' Stores'))

@section('breadcrumb-links')
    @include('backend.store.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Stores')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.store.create')"
                :text="__('Create Store')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:store-table/>
        </x-slot>
    </x-backend.card>
@endsection