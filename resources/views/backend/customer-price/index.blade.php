@extends('backend.layouts.app')

@section('title', __(' Customerprices'))

@section('breadcrumb-links')
    @include('backend.customer-price.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Customerprices')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.customerprice.create')"
                :text="__('Create Customerprice')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:customerprice-table/>
        </x-slot>
    </x-backend.card>
@endsection