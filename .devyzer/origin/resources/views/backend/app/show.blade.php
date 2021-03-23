@extends('backend.layouts.app')

@section('title', __('View App'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View App')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.app.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $app->id }}</td>
                </tr>
                <tr>
                    <th>@lang('name')</th>
                    <td>{{   $app->name }}</td>
                </tr>
                <tr>
                    <th>@lang('public')</th>
                    <td>{{   $app->public }}</td>
                </tr>
                <tr>
                    <th>@lang('client_id')</th>
                    <td>{{   $app->client_id }}</td>
                </tr>
                <tr>
                    <th>@lang('client_secret')</th>
                    <td>{{   $app->client_secret }}</td>
                </tr>
                <tr>
                    <th>@lang('random_authentication')</th>
                    <td>{{   $app->random_authentication }}</td>
                </tr>
                <tr>
                    <th>@lang('in_house_development')</th>
                    <td>{{   $app->in_house_development }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('App Created'):</strong> @displayDate($app->created_at) ({{   $app->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($app->updated_at) ({{   $app->updated_at->diffForHumans() }})

                @if($app->trashed())
                    <strong>@lang('App Deleted'):</strong> @displayDate($app->deleted_at) ({{   $app->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection