@extends('backend.layouts.app')

@section('title', __('Deleted Submissions'))

@section('breadcrumb-links')
    @include('backend.submission.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Submissions')
        </x-slot>

        <x-slot name="body">
            <livewire:submission-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection