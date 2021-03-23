@extends('backend.layouts.app')

@section('title', __('View Comment'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Comment')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.comment.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $comment->id }}</td>
                </tr>
                <tr>
                    <th>@lang('comment')</th>
                    <td>{{   $comment->comment }}</td>
                </tr>
                <tr>
                    <th>@lang('is_public')</th>
                    <td>{{   $comment->is_public }}</td>
                </tr>
                <tr>
                    <th>@lang('order_id')</th>
                    <td>{{   $comment->order_id }}</td>
                </tr>
                <tr>
                    <th>@lang('user_id')</th>
                    <td>{{   $comment->user_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Comment Created'):</strong> @displayDate($comment->created_at) ({{   $comment->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($comment->updated_at) ({{   $comment->updated_at->diffForHumans() }})

                @if($comment->trashed())
                    <strong>@lang('Comment Deleted'):</strong> @displayDate($comment->deleted_at) ({{   $comment->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection