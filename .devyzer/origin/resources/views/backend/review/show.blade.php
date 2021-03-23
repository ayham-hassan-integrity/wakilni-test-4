@extends('backend.layouts.app')

@section('title', __('View Review'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Review')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.review.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $review->id }}</td>
                </tr>
                <tr>
                    <th>@lang('order_id')</th>
                    <td>{{   $review->order_id }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_id')</th>
                    <td>{{   $review->customer_id }}</td>
                </tr>
                <tr>
                    <th>@lang('recipient_id')</th>
                    <td>{{   $review->recipient_id }}</td>
                </tr>
                <tr>
                    <th>@lang('rate')</th>
                    <td>{{   $review->rate }}</td>
                </tr>
                <tr>
                    <th>@lang('feedback_message')</th>
                    <td>{{   $review->feedback_message }}</td>
                </tr>
                <tr>
                    <th>@lang('viewed')</th>
                    <td>{{   $review->viewed }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Review Created'):</strong> @displayDate($review->created_at) ({{   $review->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($review->updated_at) ({{   $review->updated_at->diffForHumans() }})

                @if($review->trashed())
                    <strong>@lang('Review Deleted'):</strong> @displayDate($review->deleted_at) ({{   $review->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection