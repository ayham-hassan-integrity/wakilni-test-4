@extends('backend.layouts.app')

@section('title', __(' Telescopeentrytags'))

@section('breadcrumb-links')
    @include('backend.telescope-entry-tag.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Telescopeentrytags')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.telescopeentrytag.create')"
                :text="__('Create Telescopeentrytag')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:telescopeentrytag-table/>
        </x-slot>
    </x-backend.card>
@endsection