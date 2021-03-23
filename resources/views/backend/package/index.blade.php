@extends('backend.layouts.app')

@section('title', __(' Packages'))

@section('breadcrumb-links')
    @include('backend.package.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Packages')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.package.create')"
                :text="__('Create Package')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:package-table/>
        </x-slot>
    </x-backend.card>
@endsection