@extends('backend.layouts.app')

@section('title', __(' Users'))

@section('breadcrumb-links')
    @include('backend.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Users')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.user.create')"
                :text="__('Create User')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:user-table/>
        </x-slot>
    </x-backend.card>
@endsection