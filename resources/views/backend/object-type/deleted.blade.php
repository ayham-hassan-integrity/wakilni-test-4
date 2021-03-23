@extends('backend.layouts.app')

@section('title', __('Deleted Objecttypes'))

@section('breadcrumb-links')
    @include('backend.object-type.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Objecttypes')
        </x-slot>

        <x-slot name="body">
            <livewire:objecttype-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection