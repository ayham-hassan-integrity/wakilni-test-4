@extends('backend.layouts.app')

@section('title', __(' Routes'))

@section('breadcrumb-links')
    @include('backend.route.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Routes')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.route.create')"
                :text="__('Create Route')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:route-table/>
        </x-slot>
    </x-backend.card>
@endsection