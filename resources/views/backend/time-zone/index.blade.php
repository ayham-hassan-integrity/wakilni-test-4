@extends('backend.layouts.app')

@section('title', __(' Timezones'))

@section('breadcrumb-links')
    @include('backend.time-zone.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Timezones')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.timezone.create')"
                :text="__('Create Timezone')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:timezone-table/>
        </x-slot>
    </x-backend.card>
@endsection