@extends('backend.layouts.app')

@section('title', __('Deleted Comments'))

@section('breadcrumb-links')
    @include('backend.comment.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Comments')
        </x-slot>

        <x-slot name="body">
            <livewire:comment-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection