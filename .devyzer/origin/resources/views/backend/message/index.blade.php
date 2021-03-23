@extends('backend.layouts.app')

@section('title', __(' Messages'))

@section('breadcrumb-links')
    @include('backend.message.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Messages')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.message.create')"
                :text="__('Create Message')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:message-table/>
        </x-slot>
    </x-backend.card>
@endsection