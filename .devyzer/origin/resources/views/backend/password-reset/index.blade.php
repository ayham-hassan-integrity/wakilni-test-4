@extends('backend.layouts.app')

@section('title', __(' Passwordresets'))

@section('breadcrumb-links')
    @include('backend.password-reset.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Passwordresets')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.passwordreset.create')"
                :text="__('Create Passwordreset')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:passwordreset-table/>
        </x-slot>
    </x-backend.card>
@endsection