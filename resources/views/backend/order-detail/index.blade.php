@extends('backend.layouts.app')

@section('title', __(' Orderdetails'))

@section('breadcrumb-links')
    @include('backend.order-detail.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Orderdetails')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.orderdetail.create')"
                :text="__('Create Orderdetail')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:orderdetail-table/>
        </x-slot>
    </x-backend.card>
@endsection