@extends('backend.layouts.app')

@section('title', __('View Recipient'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Recipient')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.recipient.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $recipient->id }}</td>
                </tr>
                <tr>
                    <th>@lang('first_name')</th>
                    <td>{{   $recipient->first_name }}</td>
                </tr>
                <tr>
                    <th>@lang('last_name')</th>
                    <td>{{   $recipient->last_name }}</td>
                </tr>
                <tr>
                    <th>@lang('phone_number')</th>
                    <td>{{   $recipient->phone_number }}</td>
                </tr>
                <tr>
                    <th>@lang('date_of_birth')</th>
                    <td>{{   $recipient->date_of_birth }}</td>
                </tr>
                <tr>
                    <th>@lang('gender')</th>
                    <td>{{   $recipient->gender }}</td>
                </tr>
                <tr>
                    <th>@lang('email')</th>
                    <td>{{   $recipient->email }}</td>
                </tr>
                <tr>
                    <th>@lang('note')</th>
                    <td>{{   $recipient->note }}</td>
                </tr>
                <tr>
                    <th>@lang('allow_driver_contact')</th>
                    <td>{{   $recipient->allow_driver_contact }}</td>
                </tr>
                <tr>
                    <th>@lang('viewer_id')</th>
                    <td>{{   $recipient->viewer_id }}</td>
                </tr>
                <tr>
                    <th>@lang('contact_id')</th>
                    <td>{{   $recipient->contact_id }}</td>
                </tr>
                <tr>
                    <th>@lang('default_address_id')</th>
                    <td>{{   $recipient->default_address_id }}</td>
                </tr>
                <tr>
                    <th>@lang('secondary_phone_number')</th>
                    <td>{{   $recipient->secondary_phone_number }}</td>
                </tr>
                <tr>
                    <th>@lang('app_token_id')</th>
                    <td>{{   $recipient->app_token_id }}</td>
                </tr>
                <tr>
                    <th>@lang('app_ref_id')</th>
                    <td>{{   $recipient->app_ref_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Recipient Created'):</strong> @displayDate($recipient->created_at) ({{   $recipient->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($recipient->updated_at) ({{   $recipient->updated_at->diffForHumans() }})

                @if($recipient->trashed())
                    <strong>@lang('Recipient Deleted'):</strong> @displayDate($recipient->deleted_at) ({{   $recipient->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection