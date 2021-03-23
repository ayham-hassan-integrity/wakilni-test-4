@extends('backend.layouts.app')

@section('title', __('View Storecurrency'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Storecurrency')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.storecurrency.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $storecurrency->id }}</td>
                </tr>
                <tr>
                    <th>@lang('store_id')</th>
                    <td>{{   $storecurrency->store_id }}</td>
                </tr>
                <tr>
                    <th>@lang('currency_id')</th>
                    <td>{{   $storecurrency->currency_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Storecurrency Created'):</strong> @displayDate($storecurrency->created_at) ({{   $storecurrency->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($storecurrency->updated_at) ({{   $storecurrency->updated_at->diffForHumans() }})

                @if($storecurrency->trashed())
                    <strong>@lang('Storecurrency Deleted'):</strong> @displayDate($storecurrency->deleted_at) ({{   $storecurrency->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection