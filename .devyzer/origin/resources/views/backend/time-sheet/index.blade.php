@extends('backend.layouts.app')

@section('title', __(' Timesheets'))

@section('breadcrumb-links')
    @include('backend.time-sheet.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Timesheets')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.timesheet.create')"
                :text="__('Create Timesheet')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:timesheet-table/>
        </x-slot>
    </x-backend.card>
@endsection