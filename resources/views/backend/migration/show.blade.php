@extends('backend.layouts.app')

@section('title', __('View Migration'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Migration')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.migration.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $migration->id }}</td>
                </tr>
                <tr>
                    <th>@lang('migration')</th>
                    <td>{{   $migration->migration }}</td>
                </tr>
                <tr>
                    <th>@lang('batch')</th>
                    <td>{{   $migration->batch }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Migration Created'):</strong> @displayDate($migration->created_at) ({{   $migration->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($migration->updated_at) ({{   $migration->updated_at->diffForHumans() }})

                @if($migration->trashed())
                    <strong>@lang('Migration Deleted'):</strong> @displayDate($migration->deleted_at) ({{   $migration->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection