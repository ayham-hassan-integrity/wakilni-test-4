@extends('backend.layouts.app')

@section('title', __('Deleted Routes'))

@section('breadcrumb-links')
    @include('backend.route.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Routes')
        </x-slot>

        <x-slot name="body">
            <livewire:route-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection