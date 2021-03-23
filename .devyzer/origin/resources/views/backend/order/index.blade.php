@extends('backend.layouts.app')

@section('title', __(' Orders'))

@section('breadcrumb-links')
    @include('backend.order.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Orders')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.order.create')"
                :text="__('Create Order')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:order-table/>
        </x-slot>
    </x-backend.card>
@endsection