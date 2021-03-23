@extends('backend.layouts.app')

@section('title', __('View Failedjob'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Failedjob')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.failedjob.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $failedjob->id }}</td>
                </tr>
                <tr>
                    <th>@lang('connection')</th>
                    <td>{{   $failedjob->connection }}</td>
                </tr>
                <tr>
                    <th>@lang('queue')</th>
                    <td>{{   $failedjob->queue }}</td>
                </tr>
                <tr>
                    <th>@lang('payload')</th>
                    <td>{{   $failedjob->payload }}</td>
                </tr>
                <tr>
                    <th>@lang('exception')</th>
                    <td>{{   $failedjob->exception }}</td>
                </tr>
                <tr>
                    <th>@lang('failed_at')</th>
                    <td>{{   $failedjob->failed_at }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Failedjob Created'):</strong> @displayDate($failedjob->created_at) ({{   $failedjob->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($failedjob->updated_at) ({{   $failedjob->updated_at->diffForHumans() }})

                @if($failedjob->trashed())
                    <strong>@lang('Failedjob Deleted'):</strong> @displayDate($failedjob->deleted_at) ({{   $failedjob->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection