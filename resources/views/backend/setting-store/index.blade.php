@extends('backend.layouts.app')

@section('title', __(' Settingstores'))

@section('breadcrumb-links')
    @include('backend.setting-store.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Settingstores')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.settingstore.create')"
                :text="__('Create Settingstore')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:settingstore-table/>
        </x-slot>
    </x-backend.card>
@endsection