@extends('backend.layouts.app')

@section('title', __(' Customeroperators'))

@section('breadcrumb-links')
    @include('backend.customer-operator.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Customeroperators')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.customeroperator.create')"
                :text="__('Create Customeroperator')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:customeroperator-table/>
        </x-slot>
    </x-backend.card>
@endsection