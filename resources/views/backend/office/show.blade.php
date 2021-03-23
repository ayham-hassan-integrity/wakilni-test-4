@extends('backend.layouts.app')

@section('title', __('View Office'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Office')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.office.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $office->id }}</td>
                </tr>
                <tr>
                    <th>@lang('name')</th>
                    <td>{{   $office->name }}</td>
                </tr>
                <tr>
                    <th>@lang('area')</th>
                    <td>{{   $office->area }}</td>
                </tr>
                <tr>
                    <th>@lang('store_id')</th>
                    <td>{{   $office->store_id }}</td>
                </tr>
                <tr>
                    <th>@lang('phone_number')</th>
                    <td>{{   $office->phone_number }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Office Created'):</strong> @displayDate($office->created_at) ({{   $office->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($office->updated_at) ({{   $office->updated_at->diffForHumans() }})

                @if($office->trashed())
                    <strong>@lang('Office Deleted'):</strong> @displayDate($office->deleted_at) ({{   $office->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection