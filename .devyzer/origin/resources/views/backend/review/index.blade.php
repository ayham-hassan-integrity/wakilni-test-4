@extends('backend.layouts.app')

@section('title', __(' Reviews'))

@section('breadcrumb-links')
    @include('backend.review.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Reviews')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.review.create')"
                :text="__('Create Review')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:review-table/>
        </x-slot>
    </x-backend.card>
@endsection