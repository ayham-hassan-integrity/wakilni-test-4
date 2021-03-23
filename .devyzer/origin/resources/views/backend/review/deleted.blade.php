@extends('backend.layouts.app')

@section('title', __('Deleted Reviews'))

@section('breadcrumb-links')
    @include('backend.review.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Reviews')
        </x-slot>

        <x-slot name="body">
            <livewire:review-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection