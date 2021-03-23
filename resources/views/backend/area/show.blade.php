@extends('backend.layouts.app')

@section('title', __('View Area'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Area')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.area.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $area->id }}</td>
                </tr>
                <tr>
                    <th>@lang('name')</th>
                    <td>{{   $area->name }}</td>
                </tr>
                <tr>
                    <th>@lang('zone_id')</th>
                    <td>{{   $area->zone_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Area Created'):</strong> @displayDate($area->created_at) ({{   $area->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($area->updated_at) ({{   $area->updated_at->diffForHumans() }})

                @if($area->trashed())
                    <strong>@lang('Area Deleted'):</strong> @displayDate($area->deleted_at) ({{   $area->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection