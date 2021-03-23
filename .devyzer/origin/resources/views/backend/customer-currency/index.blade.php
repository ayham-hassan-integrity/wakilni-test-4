@extends('backend.layouts.app')

@section('title', __(' Customercurrencies'))

@section('breadcrumb-links')
    @include('backend.customer-currency.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Customercurrencies')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.customercurrency.create')"
                :text="__('Create Customercurrency')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:customercurrency-table/>
        </x-slot>
    </x-backend.card>
@endsection