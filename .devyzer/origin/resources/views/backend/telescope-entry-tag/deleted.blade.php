@extends('backend.layouts.app')

@section('title', __('Deleted Telescopeentrytags'))

@section('breadcrumb-links')
    @include('backend.telescope-entry-tag.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Telescopeentrytags')
        </x-slot>

        <x-slot name="body">
            <livewire:telescopeentrytag-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection