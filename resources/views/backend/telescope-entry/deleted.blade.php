@extends('backend.layouts.app')

@section('title', __('Deleted Telescopeentrys'))

@section('breadcrumb-links')
    @include('backend.telescope-entry.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Telescopeentrys')
        </x-slot>

        <x-slot name="body">
            <livewire:telescopeentry-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection