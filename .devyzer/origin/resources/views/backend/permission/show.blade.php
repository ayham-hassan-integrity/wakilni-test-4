@extends('backend.layouts.app')

@section('title', __('View Permission'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Permission')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.permission.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $permission->id }}</td>
                </tr>
                <tr>
                    <th>@lang('name')</th>
                    <td>{{   $permission->name }}</td>
                </tr>
                <tr>
                    <th>@lang('guard_name')</th>
                    <td>{{   $permission->guard_name }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Permission Created'):</strong> @displayDate($permission->created_at) ({{   $permission->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($permission->updated_at) ({{   $permission->updated_at->diffForHumans() }})

                @if($permission->trashed())
                    <strong>@lang('Permission Deleted'):</strong> @displayDate($permission->deleted_at) ({{   $permission->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection