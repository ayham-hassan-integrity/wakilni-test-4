@extends('backend.layouts.app')

@section('title', __('Deleted Files'))

@section('breadcrumb-links')
    @include('backend.file.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Files')
        </x-slot>

        <x-slot name="body">
            <livewire:file-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection