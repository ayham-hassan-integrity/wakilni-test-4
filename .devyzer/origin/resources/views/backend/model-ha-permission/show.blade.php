@extends('backend.layouts.app')

@section('title', __('View Modelhapermission'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Modelhapermission')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.modelhapermission.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('permission_id')</th>
                    <td>{{   $modelhapermission->permission_id }}</td>
                </tr>
                <tr>
                    <th>@lang('model_id')</th>
                    <td>{{   $modelhapermission->model_id }}</td>
                </tr>
                <tr>
                    <th>@lang('model_type')</th>
                    <td>{{   $modelhapermission->model_type }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Modelhapermission Created'):</strong> @displayDate($modelhapermission->created_at) ({{   $modelhapermission->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($modelhapermission->updated_at) ({{   $modelhapermission->updated_at->diffForHumans() }})

                @if($modelhapermission->trashed())
                    <strong>@lang('Modelhapermission Deleted'):</strong> @displayDate($modelhapermission->deleted_at) ({{   $modelhapermission->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection