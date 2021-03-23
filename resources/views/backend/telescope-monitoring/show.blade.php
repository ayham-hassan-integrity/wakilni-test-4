@extends('backend.layouts.app')

@section('title', __('View Telescopemonitoring'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Telescopemonitoring')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.telescopemonitoring.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('tag')</th>
                    <td>{{   $telescopemonitoring->tag }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Telescopemonitoring Created'):</strong> @displayDate($telescopemonitoring->created_at) ({{   $telescopemonitoring->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($telescopemonitoring->updated_at) ({{   $telescopemonitoring->updated_at->diffForHumans() }})

                @if($telescopemonitoring->trashed())
                    <strong>@lang('Telescopemonitoring Deleted'):</strong> @displayDate($telescopemonitoring->deleted_at) ({{   $telescopemonitoring->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection