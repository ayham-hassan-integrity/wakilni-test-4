@extends('backend.layouts.app')

@section('title', __('View Message'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Message')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.message.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $message->id }}</td>
                </tr>
                <tr>
                    <th>@lang('title')</th>
                    <td>{{   $message->title }}</td>
                </tr>
                <tr>
                    <th>@lang('message')</th>
                    <td>{{   $message->message }}</td>
                </tr>
                <tr>
                    <th>@lang('status')</th>
                    <td>{{   $message->status }}</td>
                </tr>
                <tr>
                    <th>@lang('receiver_id')</th>
                    <td>{{   $message->receiver_id }}</td>
                </tr>
                <tr>
                    <th>@lang('sender_id')</th>
                    <td>{{   $message->sender_id }}</td>
                </tr>
                <tr>
                    <th>@lang('content_type_id')</th>
                    <td>{{   $message->content_type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $message->type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('location_id')</th>
                    <td>{{   $message->location_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Message Created'):</strong> @displayDate($message->created_at) ({{   $message->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($message->updated_at) ({{   $message->updated_at->diffForHumans() }})

                @if($message->trashed())
                    <strong>@lang('Message Deleted'):</strong> @displayDate($message->deleted_at) ({{   $message->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection