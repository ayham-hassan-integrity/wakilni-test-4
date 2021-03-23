@extends('backend.layouts.app')

@section('title', __(' Payments'))

@section('breadcrumb-links')
    @include('backend.payment.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Payments')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.payment.create')"
                :text="__('Create Payment')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:payment-table/>
        </x-slot>
    </x-backend.card>
@endsection