@extends('backend.layouts.app')

@section('title', __('Deleted Collections'))

@section('breadcrumb-links')
    @include('backend.collection.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Collections')
        </x-slot>

        <x-slot name="body">
            <livewire:collection-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection