@extends('backend.layouts.app')

@section('title', __('View Apptoken'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Apptoken')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.apptoken.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $apptoken->id }}</td>
                </tr>
                <tr>
                    <th>@lang('shop')</th>
                    <td>{{   $apptoken->shop }}</td>
                </tr>
                <tr>
                    <th>@lang('access_token')</th>
                    <td>{{   $apptoken->access_token }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_id')</th>
                    <td>{{   $apptoken->customer_id }}</td>
                </tr>
                <tr>
                    <th>@lang('app_id')</th>
                    <td>{{   $apptoken->app_id }}</td>
                </tr>
                <tr>
                    <th>@lang('location_id')</th>
                    <td>{{   $apptoken->location_id }}</td>
                </tr>
                <tr>
                    <th>@lang('code')</th>
                    <td>{{   $apptoken->code }}</td>
                </tr>
                <tr>
                    <th>@lang('authenticated')</th>
                    <td>{{   $apptoken->authenticated }}</td>
                </tr>
                <tr>
                    <th>@lang('remember_token')</th>
                    <td>{{   $apptoken->remember_token }}</td>
                </tr>
                <tr>
                    <th>@lang('country_code')</th>
                    <td>{{   $apptoken->country_code }}</td>
                </tr>
                <tr>
                    <th>@lang('extra')</th>
                    <td>{{   $apptoken->extra }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Apptoken Created'):</strong> @displayDate($apptoken->created_at) ({{   $apptoken->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($apptoken->updated_at) ({{   $apptoken->updated_at->diffForHumans() }})

                @if($apptoken->trashed())
                    <strong>@lang('Apptoken Deleted'):</strong> @displayDate($apptoken->deleted_at) ({{   $apptoken->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection