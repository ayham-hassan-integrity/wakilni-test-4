@extends('backend.layouts.app')

@section('title', __('View Package'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Package')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.package.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $package->id }}</td>
                </tr>
                <tr>
                    <th>@lang('quantity')</th>
                    <td>{{   $package->quantity }}</td>
                </tr>
                <tr>
                    <th>@lang('trip_number')</th>
                    <td>{{   $package->trip_number }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $package->type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('order_details_id')</th>
                    <td>{{   $package->order_details_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Package Created'):</strong> @displayDate($package->created_at) ({{   $package->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($package->updated_at) ({{   $package->updated_at->diffForHumans() }})

                @if($package->trashed())
                    <strong>@lang('Package Deleted'):</strong> @displayDate($package->deleted_at) ({{   $package->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection