@extends('backend.layouts.app')

@section('title', __(' Storecurrencies'))

@section('breadcrumb-links')
    @include('backend.store-currency.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Storecurrencies')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.storecurrency.create')"
                :text="__('Create Storecurrency')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:storecurrency-table/>
        </x-slot>
    </x-backend.card>
@endsection