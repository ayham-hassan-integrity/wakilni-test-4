@extends('backend.layouts.app')

@section('title', __('View Store'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Store')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.store.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $store->id }}</td>
                </tr>
                <tr>
                    <th>@lang('name')</th>
                    <td>{{   $store->name }}</td>
                </tr>
                <tr>
                    <th>@lang('prefix')</th>
                    <td>{{   $store->prefix }}</td>
                </tr>
                <tr>
                    <th>@lang('area')</th>
                    <td>{{   $store->area }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Store Created'):</strong> @displayDate($store->created_at) ({{   $store->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($store->updated_at) ({{   $store->updated_at->diffForHumans() }})

                @if($store->trashed())
                    <strong>@lang('Store Deleted'):</strong> @displayDate($store->deleted_at) ({{   $store->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection