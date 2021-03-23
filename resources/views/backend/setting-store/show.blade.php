@extends('backend.layouts.app')

@section('title', __('View Settingstore'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Settingstore')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.settingstore.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $settingstore->id }}</td>
                </tr>
                <tr>
                    <th>@lang('store_id')</th>
                    <td>{{   $settingstore->store_id }}</td>
                </tr>
                <tr>
                    <th>@lang('setting_id')</th>
                    <td>{{   $settingstore->setting_id }}</td>
                </tr>
                <tr>
                    <th>@lang('value')</th>
                    <td>{{   $settingstore->value }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Settingstore Created'):</strong> @displayDate($settingstore->created_at) ({{   $settingstore->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($settingstore->updated_at) ({{   $settingstore->updated_at->diffForHumans() }})

                @if($settingstore->trashed())
                    <strong>@lang('Settingstore Deleted'):</strong> @displayDate($settingstore->deleted_at) ({{   $settingstore->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection