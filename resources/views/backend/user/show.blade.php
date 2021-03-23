@extends('backend.layouts.app')

@section('title', __('View User'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View User')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.user.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $user->id }}</td>
                </tr>
                <tr>
                    <th>@lang('email')</th>
                    <td>{{   $user->email }}</td>
                </tr>
                <tr>
                    <th>@lang('phone_number')</th>
                    <td>{{   $user->phone_number }}</td>
                </tr>
                <tr>
                    <th>@lang('password')</th>
                    <td>{{   $user->password }}</td>
                </tr>
                <tr>
                    <th>@lang('pattern')</th>
                    <td>{{   $user->pattern }}</td>
                </tr>
                <tr>
                    <th>@lang('start_date')</th>
                    <td>{{   $user->start_date }}</td>
                </tr>
                <tr>
                    <th>@lang('office_id')</th>
                    <td>{{   $user->office_id }}</td>
                </tr>
                <tr>
                    <th>@lang('remember_token')</th>
                    <td>{{   $user->remember_token }}</td>
                </tr>
                <tr>
                    <th>@lang('contact_id')</th>
                    <td>{{   $user->contact_id }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_id')</th>
                    <td>{{   $user->customer_id }}</td>
                </tr>
                <tr>
                    <th>@lang('last_login')</th>
                    <td>{{   $user->last_login }}</td>
                </tr>
                <tr>
                    <th>@lang('is_active')</th>
                    <td>{{   $user->is_active }}</td>
                </tr>
                <tr>
                    <th>@lang('language_type')</th>
                    <td>{{   $user->language_type }}</td>
                </tr>
                <tr>
                    <th>@lang('time_zone')</th>
                    <td>{{   $user->time_zone }}</td>
                </tr>
                <tr>
                    <th>@lang('provider_name')</th>
                    <td>{{   $user->provider_name }}</td>
                </tr>
                <tr>
                    <th>@lang('provider_token')</th>
                    <td>{{   $user->provider_token }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('User Created'):</strong> @displayDate($user->created_at) ({{   $user->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($user->updated_at) ({{   $user->updated_at->diffForHumans() }})

                @if($user->trashed())
                    <strong>@lang('User Deleted'):</strong> @displayDate($user->deleted_at) ({{   $user->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection