@extends('backend.layouts.app')

@section('title', __(' Recipients'))

@section('breadcrumb-links')
    @include('backend.recipient.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Recipients')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.recipient.create')"
                :text="__('Create Recipient')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:recipient-table/>
        </x-slot>
    </x-backend.card>
@endsection