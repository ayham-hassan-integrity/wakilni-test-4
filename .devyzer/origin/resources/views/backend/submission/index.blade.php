@extends('backend.layouts.app')

@section('title', __(' Submissions'))

@section('breadcrumb-links')
    @include('backend.submission.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Submissions')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.submission.create')"
                :text="__('Create Submission')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:submission-table/>
        </x-slot>
    </x-backend.card>
@endsection