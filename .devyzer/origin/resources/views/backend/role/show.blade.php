@extends('backend.layouts.app')

@section('title', __('View Role'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Role')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.role.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $role->id }}</td>
                </tr>
                <tr>
                    <th>@lang('name')</th>
                    <td>{{   $role->name }}</td>
                </tr>
                <tr>
                    <th>@lang('guard_name')</th>
                    <td>{{   $role->guard_name }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Role Created'):</strong> @displayDate($role->created_at) ({{   $role->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($role->updated_at) ({{   $role->updated_at->diffForHumans() }})

                @if($role->trashed())
                    <strong>@lang('Role Deleted'):</strong> @displayDate($role->deleted_at) ({{   $role->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection