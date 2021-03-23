@extends('backend.layouts.app')

@section('title', __(' Objecttypes'))

@section('breadcrumb-links')
    @include('backend.object-type.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Objecttypes')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.objecttype.create')"
                :text="__('Create Objecttype')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:objecttype-table/>
        </x-slot>
    </x-backend.card>
@endsection