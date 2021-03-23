@extends('backend.layouts.app')

@section('title', __('View Stock'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Stock')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.stock.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $stock->id }}</td>
                </tr>
                <tr>
                    <th>@lang('label')</th>
                    <td>{{   $stock->label }}</td>
                </tr>
                <tr>
                    <th>@lang('amount')</th>
                    <td>{{   $stock->amount }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $stock->type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('size_id')</th>
                    <td>{{   $stock->size_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Stock Created'):</strong> @displayDate($stock->created_at) ({{   $stock->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($stock->updated_at) ({{   $stock->updated_at->diffForHumans() }})

                @if($stock->trashed())
                    <strong>@lang('Stock Deleted'):</strong> @displayDate($stock->deleted_at) ({{   $stock->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection