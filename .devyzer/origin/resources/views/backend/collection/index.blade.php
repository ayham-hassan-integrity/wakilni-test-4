@extends('backend.layouts.app')

@section('title', __(' Collections'))

@section('breadcrumb-links')
    @include('backend.collection.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Collections')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.collection.create')"
                :text="__('Create Collection')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:collection-table/>
        </x-slot>
    </x-backend.card>
@endsection