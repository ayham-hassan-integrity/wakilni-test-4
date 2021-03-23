@extends('backend.layouts.app')

@section('title', __(' Piggybanks'))

@section('breadcrumb-links')
    @include('backend.piggy-bank.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Piggybanks')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.piggybank.create')"
                :text="__('Create Piggybank')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:piggybank-table/>
        </x-slot>
    </x-backend.card>
@endsection