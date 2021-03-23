@extends('backend.layouts.app')

@section('title', __('View Telescopeentrytag'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Telescopeentrytag')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.telescopeentrytag.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('entry_uuid')</th>
                    <td>{{   $telescopeentrytag->entry_uuid }}</td>
                </tr>
                <tr>
                    <th>@lang('tag')</th>
                    <td>{{   $telescopeentrytag->tag }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Telescopeentrytag Created'):</strong> @displayDate($telescopeentrytag->created_at) ({{   $telescopeentrytag->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($telescopeentrytag->updated_at) ({{   $telescopeentrytag->updated_at->diffForHumans() }})

                @if($telescopeentrytag->trashed())
                    <strong>@lang('Telescopeentrytag Deleted'):</strong> @displayDate($telescopeentrytag->deleted_at) ({{   $telescopeentrytag->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection