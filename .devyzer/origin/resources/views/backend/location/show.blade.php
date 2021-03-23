@extends('backend.layouts.app')

@section('title', __('View Location'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Location')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.location.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $location->id }}</td>
                </tr>
                <tr>
                    <th>@lang('building')</th>
                    <td>{{   $location->building }}</td>
                </tr>
                <tr>
                    <th>@lang('floor')</th>
                    <td>{{   $location->floor }}</td>
                </tr>
                <tr>
                    <th>@lang('directions')</th>
                    <td>{{   $location->directions }}</td>
                </tr>
                <tr>
                    <th>@lang('longitude')</th>
                    <td>{{   $location->longitude }}</td>
                </tr>
                <tr>
                    <th>@lang('latitude')</th>
                    <td>{{   $location->latitude }}</td>
                </tr>
                <tr>
                    <th>@lang('area_id')</th>
                    <td>{{   $location->area_id }}</td>
                </tr>
                <tr>
                    <th>@lang('personable_id')</th>
                    <td>{{   $location->personable_id }}</td>
                </tr>
                <tr>
                    <th>@lang('personable_type')</th>
                    <td>{{   $location->personable_type }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $location->type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('is_active')</th>
                    <td>{{   $location->is_active }}</td>
                </tr>
                <tr>
                    <th>@lang('image_id')</th>
                    <td>{{   $location->image_id }}</td>
                </tr>
                <tr>
                    <th>@lang('app_token_id')</th>
                    <td>{{   $location->app_token_id }}</td>
                </tr>
                <tr>
                    <th>@lang('app_ref_id')</th>
                    <td>{{   $location->app_ref_id }}</td>
                </tr>
                <tr>
                    <th>@lang('voice')</th>
                    <td>{{   $location->voice }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Location Created'):</strong> @displayDate($location->created_at) ({{   $location->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($location->updated_at) ({{   $location->updated_at->diffForHumans() }})

                @if($location->trashed())
                    <strong>@lang('Location Deleted'):</strong> @displayDate($location->deleted_at) ({{   $location->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection