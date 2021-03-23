@extends('backend.layouts.app')

@section('title', __('View Task'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Task')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.task.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $task->id }}</td>
                </tr>
                <tr>
                    <th>@lang('sequence')</th>
                    <td>{{   $task->sequence }}</td>
                </tr>
                <tr>
                    <th>@lang('overall_sequence')</th>
                    <td>{{   $task->overall_sequence }}</td>
                </tr>
                <tr>
                    <th>@lang('deliver_amount')</th>
                    <td>{{   $task->deliver_amount }}</td>
                </tr>
                <tr>
                    <th>@lang('receive_amount')</th>
                    <td>{{   $task->receive_amount }}</td>
                </tr>
                <tr>
                    <th>@lang('deliver_package')</th>
                    <td>{{   $task->deliver_package }}</td>
                </tr>
                <tr>
                    <th>@lang('receive_package')</th>
                    <td>{{   $task->receive_package }}</td>
                </tr>
                <tr>
                    <th>@lang('note')</th>
                    <td>{{   $task->note }}</td>
                </tr>
                <tr>
                    <th>@lang('fail_reason')</th>
                    <td>{{   $task->fail_reason }}</td>
                </tr>
                <tr>
                    <th>@lang('collection_note')</th>
                    <td>{{   $task->collection_note }}</td>
                </tr>
                <tr>
                    <th>@lang('preferred_date')</th>
                    <td>{{   $task->preferred_date }}</td>
                </tr>
                <tr>
                    <th>@lang('preferred_from_time')</th>
                    <td>{{   $task->preferred_from_time }}</td>
                </tr>
                <tr>
                    <th>@lang('preferred_to_time')</th>
                    <td>{{   $task->preferred_to_time }}</td>
                </tr>
                <tr>
                    <th>@lang('collection_date')</th>
                    <td>{{   $task->collection_date }}</td>
                </tr>
                <tr>
                    <th>@lang('require_signature')</th>
                    <td>{{   $task->require_signature }}</td>
                </tr>
                <tr>
                    <th>@lang('status')</th>
                    <td>{{   $task->status }}</td>
                </tr>
                <tr>
                    <th>@lang('submitted')</th>
                    <td>{{   $task->submitted }}</td>
                </tr>
                <tr>
                    <th>@lang('secured')</th>
                    <td>{{   $task->secured }}</td>
                </tr>
                <tr>
                    <th>@lang('receiverable_id')</th>
                    <td>{{   $task->receiverable_id }}</td>
                </tr>
                <tr>
                    <th>@lang('receiverable_type')</th>
                    <td>{{   $task->receiverable_type }}</td>
                </tr>
                <tr>
                    <th>@lang('order_id')</th>
                    <td>{{   $task->order_id }}</td>
                </tr>
                <tr>
                    <th>@lang('location_id')</th>
                    <td>{{   $task->location_id }}</td>
                </tr>
                <tr>
                    <th>@lang('driver_id')</th>
                    <td>{{   $task->driver_id }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $task->type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_id')</th>
                    <td>{{   $task->customer_id }}</td>
                </tr>
                <tr>
                    <th>@lang('store_id')</th>
                    <td>{{   $task->store_id }}</td>
                </tr>
                <tr>
                    <th>@lang('require_picture')</th>
                    <td>{{   $task->require_picture }}</td>
                </tr>
                <tr>
                    <th>@lang('picture_id')</th>
                    <td>{{   $task->picture_id }}</td>
                </tr>
                <tr>
                    <th>@lang('signature_id')</th>
                    <td>{{   $task->signature_id }}</td>
                </tr>
                <tr>
                    <th>@lang('driver_submission_id')</th>
                    <td>{{   $task->driver_submission_id }}</td>
                </tr>
                <tr>
                    <th>@lang('piggy_bank_id')</th>
                    <td>{{   $task->piggy_bank_id }}</td>
                </tr>
                <tr>
                    <th>@lang('vehicle_id')</th>
                    <td>{{   $task->vehicle_id }}</td>
                </tr>
                <tr>
                    <th>@lang('receive_price')</th>
                    <td>{{   $task->receive_price }}</td>
                </tr>
                <tr>
                    <th>@lang('deliver_amount_currency_rate')</th>
                    <td>{{   $task->deliver_amount_currency_rate }}</td>
                </tr>
                <tr>
                    <th>@lang('receive_amount_currency_rate')</th>
                    <td>{{   $task->receive_amount_currency_rate }}</td>
                </tr>
                <tr>
                    <th>@lang('amount_currency')</th>
                    <td>{{   $task->amount_currency }}</td>
                </tr>
                <tr>
                    <th>@lang('price_currency')</th>
                    <td>{{   $task->price_currency }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Task Created'):</strong> @displayDate($task->created_at) ({{   $task->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($task->updated_at) ({{   $task->updated_at->diffForHumans() }})

                @if($task->trashed())
                    <strong>@lang('Task Deleted'):</strong> @displayDate($task->deleted_at) ({{   $task->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection