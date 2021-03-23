@extends('backend.layouts.app')

@section('title', __(' Currencies'))

@section('breadcrumb-links')
    @include('backend.currency.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Currencies')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.currency.create')"
                :text="__('Create Currency')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:currency-table/>
        </x-slot>
    </x-backend.card>
@endsection