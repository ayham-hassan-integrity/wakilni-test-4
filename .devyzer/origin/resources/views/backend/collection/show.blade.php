@extends('backend.layouts.app')

@section('title', __('View Collection'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Collection')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.collection.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $collection->id }}</td>
                </tr>
                <tr>
                    <th>@lang('amount')</th>
                    <td>{{   $collection->amount }}</td>
                </tr>
                <tr>
                    <th>@lang('task_id')</th>
                    <td>{{   $collection->task_id }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $collection->type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('currency_id')</th>
                    <td>{{   $collection->currency_id }}</td>
                </tr>
                <tr>
                    <th>@lang('order_id')</th>
                    <td>{{   $collection->order_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Collection Created'):</strong> @displayDate($collection->created_at) ({{   $collection->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($collection->updated_at) ({{   $collection->updated_at->diffForHumans() }})

                @if($collection->trashed())
                    <strong>@lang('Collection Deleted'):</strong> @displayDate($collection->deleted_at) ({{   $collection->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection