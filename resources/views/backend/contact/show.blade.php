@extends('backend.layouts.app')

@section('title', __('View Contact'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Contact')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.contact.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $contact->id }}</td>
                </tr>
                <tr>
                    <th>@lang('first_name')</th>
                    <td>{{   $contact->first_name }}</td>
                </tr>
                <tr>
                    <th>@lang('last_name')</th>
                    <td>{{   $contact->last_name }}</td>
                </tr>
                <tr>
                    <th>@lang('phone_number')</th>
                    <td>{{   $contact->phone_number }}</td>
                </tr>
                <tr>
                    <th>@lang('date_of_birth')</th>
                    <td>{{   $contact->date_of_birth }}</td>
                </tr>
                <tr>
                    <th>@lang('gender')</th>
                    <td>{{   $contact->gender }}</td>
                </tr>
                <tr>
                    <th>@lang('is_active')</th>
                    <td>{{   $contact->is_active }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Contact Created'):</strong> @displayDate($contact->created_at) ({{   $contact->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($contact->updated_at) ({{   $contact->updated_at->diffForHumans() }})

                @if($contact->trashed())
                    <strong>@lang('Contact Deleted'):</strong> @displayDate($contact->deleted_at) ({{   $contact->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection