@extends('backend.layouts.app')

@section('title', __('Deleted Apptokens'))

@section('breadcrumb-links')
    @include('backend.app-token.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Apptokens')
        </x-slot>

        <x-slot name="body">
            <livewire:apptoken-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection