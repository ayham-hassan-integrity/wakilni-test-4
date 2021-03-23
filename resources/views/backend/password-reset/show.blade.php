@extends('backend.layouts.app')

@section('title', __('View Passwordreset'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Passwordreset')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.passwordreset.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('email')</th>
                    <td>{{   $passwordreset->email }}</td>
                </tr>
                <tr>
                    <th>@lang('token')</th>
                    <td>{{   $passwordreset->token }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Passwordreset Created'):</strong> @displayDate($passwordreset->created_at) ({{   $passwordreset->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($passwordreset->updated_at) ({{   $passwordreset->updated_at->diffForHumans() }})

                @if($passwordreset->trashed())
                    <strong>@lang('Passwordreset Deleted'):</strong> @displayDate($passwordreset->deleted_at) ({{   $passwordreset->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection