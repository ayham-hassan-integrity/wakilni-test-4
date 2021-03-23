@extends('backend.layouts.app')

@section('title', __(' Failedjobs'))

@section('breadcrumb-links')
    @include('backend.failed-job.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Failedjobs')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.failedjob.create')"
                :text="__('Create Failedjob')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:failedjob-table/>
        </x-slot>
    </x-backend.card>
@endsection