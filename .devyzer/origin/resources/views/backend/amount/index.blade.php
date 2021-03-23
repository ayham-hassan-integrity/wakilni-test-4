@extends('backend.layouts.app')

@section('title', __(' Amounts'))

@section('breadcrumb-links')
    @include('backend.amount.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Amounts')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.amount.create')"
                :text="__('Create Amount')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:amount-table/>
        </x-slot>
    </x-backend.card>
@endsection