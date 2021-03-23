@extends('backend.layouts.app')

@section('title', __('View Setting'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Setting')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.setting.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $setting->id }}</td>
                </tr>
                <tr>
                    <th>@lang('name')</th>
                    <td>{{   $setting->name }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Setting Created'):</strong> @displayDate($setting->created_at) ({{   $setting->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($setting->updated_at) ({{   $setting->updated_at->diffForHumans() }})

                @if($setting->trashed())
                    <strong>@lang('Setting Deleted'):</strong> @displayDate($setting->deleted_at) ({{   $setting->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection