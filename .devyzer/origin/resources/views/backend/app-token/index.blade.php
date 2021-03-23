@extends('backend.layouts.app')

@section('title', __(' Apptokens'))

@section('breadcrumb-links')
    @include('backend.app-token.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Apptokens')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.apptoken.create')"
                :text="__('Create Apptoken')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:apptoken-table/>
        </x-slot>
    </x-backend.card>
@endsection