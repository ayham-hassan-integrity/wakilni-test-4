@extends('backend.layouts.app')

@section('title', __(' Driversubmissions'))

@section('breadcrumb-links')
    @include('backend.driver-submission.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Driversubmissions')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.driversubmission.create')"
                :text="__('Create Driversubmission')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:driversubmission-table/>
        </x-slot>
    </x-backend.card>
@endsection