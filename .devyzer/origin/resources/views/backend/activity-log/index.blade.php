@extends('backend.layouts.app')

@section('title', __(' Activitylogs'))

@section('breadcrumb-links')
    @include('backend.activity-log.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Activitylogs')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.activitylog.create')"
                :text="__('Create Activitylog')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:activitylog-table/>
        </x-slot>
    </x-backend.card>
@endsection