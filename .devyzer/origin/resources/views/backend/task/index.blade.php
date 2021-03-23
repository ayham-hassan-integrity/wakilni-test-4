@extends('backend.layouts.app')

@section('title', __(' Tasks'))

@section('breadcrumb-links')
    @include('backend.task.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Tasks')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.task.create')"
                :text="__('Create Task')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:task-table/>
        </x-slot>
    </x-backend.card>
@endsection