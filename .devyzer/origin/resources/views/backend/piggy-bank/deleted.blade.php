@extends('backend.layouts.app')

@section('title', __('Deleted Piggybanks'))

@section('breadcrumb-links')
    @include('backend.piggy-bank.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Piggybanks')
        </x-slot>

        <x-slot name="body">
            <livewire:piggybank-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection