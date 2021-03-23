@extends('backend.layouts.app')

@section('title', __(' Settings'))

@section('breadcrumb-links')
    @include('backend.setting.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Settings')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.setting.create')"
                :text="__('Create Setting')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:setting-table/>
        </x-slot>
    </x-backend.card>
@endsection