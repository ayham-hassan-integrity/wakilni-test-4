@extends('backend.layouts.app')

@section('title', __(' Offices'))

@section('breadcrumb-links')
    @include('backend.office.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Offices')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.office.create')"
                :text="__('Create Office')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:office-table/>
        </x-slot>
    </x-backend.card>
@endsection