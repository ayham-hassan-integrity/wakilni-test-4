@extends('backend.layouts.app')

@section('title', __('View Zone'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Zone')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.zone.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $zone->id }}</td>
                </tr>
                <tr>
                    <th>@lang('label')</th>
                    <td>{{   $zone->label }}</td>
                </tr>
                <tr>
                    <th>@lang('area')</th>
                    <td>{{   $zone->area }}</td>
                </tr>
                <tr>
                    <th>@lang('store_id')</th>
                    <td>{{   $zone->store_id }}</td>
                </tr>
                <tr>
                    <th>@lang('description')</th>
                    <td>{{   $zone->description }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Zone Created'):</strong> @displayDate($zone->created_at) ({{   $zone->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($zone->updated_at) ({{   $zone->updated_at->diffForHumans() }})

                @if($zone->trashed())
                    <strong>@lang('Zone Deleted'):</strong> @displayDate($zone->deleted_at) ({{   $zone->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection