@extends('backend.layouts.app')

@section('title', __('Deleted Recipients'))

@section('breadcrumb-links')
    @include('backend.recipient.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Recipients')
        </x-slot>

        <x-slot name="body">
            <livewire:recipient-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection