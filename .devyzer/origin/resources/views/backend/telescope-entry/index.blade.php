@extends('backend.layouts.app')

@section('title', __(' Telescopeentries'))

@section('breadcrumb-links')
    @include('backend.telescope-entry.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Telescopeentries')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.telescopeentry.create')"
                :text="__('Create Telescopeentry')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:telescopeentry-table/>
        </x-slot>
    </x-backend.card>
@endsection