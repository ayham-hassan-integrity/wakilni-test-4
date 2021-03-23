@extends('backend.layouts.app')

@section('title', __('View Customerprice'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Customerprice')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.customerprice.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $customerprice->id }}</td>
                </tr>
                <tr>
                    <th>@lang('minimum_count')</th>
                    <td>{{   $customerprice->minimum_count }}</td>
                </tr>
                <tr>
                    <th>@lang('maximum_count')</th>
                    <td>{{   $customerprice->maximum_count }}</td>
                </tr>
                <tr>
                    <th>@lang('price')</th>
                    <td>{{   $customerprice->price }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_id')</th>
                    <td>{{   $customerprice->customer_id }}</td>
                </tr>
                <tr>
                    <th>@lang('from_zone_id')</th>
                    <td>{{   $customerprice->from_zone_id }}</td>
                </tr>
                <tr>
                    <th>@lang('to_zone_id')</th>
                    <td>{{   $customerprice->to_zone_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Customerprice Created'):</strong> @displayDate($customerprice->created_at) ({{   $customerprice->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($customerprice->updated_at) ({{   $customerprice->updated_at->diffForHumans() }})

                @if($customerprice->trashed())
                    <strong>@lang('Customerprice Deleted'):</strong> @displayDate($customerprice->deleted_at) ({{   $customerprice->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection