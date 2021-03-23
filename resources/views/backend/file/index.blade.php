@extends('backend.layouts.app')

@section('title', __(' Files'))

@section('breadcrumb-links')
    @include('backend.file.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Files')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.file.create')"
                :text="__('Create File')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:file-table/>
        </x-slot>
    </x-backend.card>
@endsection