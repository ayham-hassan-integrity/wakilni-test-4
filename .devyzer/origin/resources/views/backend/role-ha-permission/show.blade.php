@extends('backend.layouts.app')

@section('title', __('View Rolehapermission'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Rolehapermission')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.rolehapermission.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('permission_id')</th>
                    <td>{{   $rolehapermission->permission_id }}</td>
                </tr>
                <tr>
                    <th>@lang('role_id')</th>
                    <td>{{   $rolehapermission->role_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Rolehapermission Created'):</strong> @displayDate($rolehapermission->created_at) ({{   $rolehapermission->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($rolehapermission->updated_at) ({{   $rolehapermission->updated_at->diffForHumans() }})

                @if($rolehapermission->trashed())
                    <strong>@lang('Rolehapermission Deleted'):</strong> @displayDate($rolehapermission->deleted_at) ({{   $rolehapermission->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection