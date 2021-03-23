@extends('backend.layouts.app')

@section('title', __('View Objecttype'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Objecttype')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.objecttype.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $objecttype->id }}</td>
                </tr>
                <tr>
                    <th>@lang('type')</th>
                    <td>{{   $objecttype->type }}</td>
                </tr>
                <tr>
                    <th>@lang('label')</th>
                    <td>{{   $objecttype->label }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Objecttype Created'):</strong> @displayDate($objecttype->created_at) ({{   $objecttype->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($objecttype->updated_at) ({{   $objecttype->updated_at->diffForHumans() }})

                @if($objecttype->trashed())
                    <strong>@lang('Objecttype Deleted'):</strong> @displayDate($objecttype->deleted_at) ({{   $objecttype->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection