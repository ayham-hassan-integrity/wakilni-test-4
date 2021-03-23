@extends('backend.layouts.app')

@section('title', __(' Apps'))

@section('breadcrumb-links')
    @include('backend.app.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Apps')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.app.create')"
                :text="__('Create App')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:app-table/>
        </x-slot>
    </x-backend.card>
@endsection