@extends('backend.layouts.app')

@section('title', __(' Stocks'))

@section('breadcrumb-links')
    @include('backend.stock.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Stocks')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.stock.create')"
                :text="__('Create Stock')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:stock-table/>
        </x-slot>
    </x-backend.card>
@endsection