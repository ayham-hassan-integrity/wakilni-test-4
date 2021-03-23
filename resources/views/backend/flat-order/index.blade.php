@extends('backend.layouts.app')

@section('title', __(' Flatorders'))

@section('breadcrumb-links')
    @include('backend.flat-order.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Flatorders')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.flatorder.create')"
                :text="__('Create Flatorder')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:flatorder-table/>
        </x-slot>
    </x-backend.card>
@endsection