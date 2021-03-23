@extends('backend.layouts.app')

@section('title', __('View Modelharole'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Modelharole')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.modelharole.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('role_id')</th>
                    <td>{{   $modelharole->role_id }}</td>
                </tr>
                <tr>
                    <th>@lang('model_id')</th>
                    <td>{{   $modelharole->model_id }}</td>
                </tr>
                <tr>
                    <th>@lang('model_type')</th>
                    <td>{{   $modelharole->model_type }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Modelharole Created'):</strong> @displayDate($modelharole->created_at) ({{   $modelharole->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($modelharole->updated_at) ({{   $modelharole->updated_at->diffForHumans() }})

                @if($modelharole->trashed())
                    <strong>@lang('Modelharole Deleted'):</strong> @displayDate($modelharole->deleted_at) ({{   $modelharole->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection