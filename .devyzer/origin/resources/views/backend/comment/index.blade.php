@extends('backend.layouts.app')

@section('title', __(' Comments'))

@section('breadcrumb-links')
    @include('backend.comment.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Comments')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.comment.create')"
                :text="__('Create Comment')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:comment-table/>
        </x-slot>
    </x-backend.card>
@endsection