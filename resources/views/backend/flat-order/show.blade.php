@extends('backend.layouts.app')

@section('title', __('View Flatorder'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Flatorder')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.flatorder.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $flatorder->id }}</td>
                </tr>
                <tr>
                    <th>@lang('order_number')</th>
                    <td>{{   $flatorder->order_number }}</td>
                </tr>
                <tr>
                    <th>@lang('waybill')</th>
                    <td>{{   $flatorder->waybill }}</td>
                </tr>
                <tr>
                    <th>@lang('parent_id')</th>
                    <td>{{   $flatorder->parent_id }}</td>
                </tr>
                <tr>
                    <th>@lang('order_id')</th>
                    <td>{{   $flatorder->order_id }}</td>
                </tr>
                <tr>
                    <th>@lang('order_details_id')</th>
                    <td>{{   $flatorder->order_details_id }}</td>
                </tr>
                <tr>
                    <th>@lang('type_id')</th>
                    <td>{{   $flatorder->type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('rate')</th>
                    <td>{{   $flatorder->rate }}</td>
                </tr>
                <tr>
                    <th>@lang('status')</th>
                    <td>{{   $flatorder->status }}</td>
                </tr>
                <tr>
                    <th>@lang('payment_status')</th>
                    <td>{{   $flatorder->payment_status }}</td>
                </tr>
                <tr>
                    <th>@lang('package_status')</th>
                    <td>{{   $flatorder->package_status }}</td>
                </tr>
                <tr>
                    <th>@lang('remaining_balance')</th>
                    <td>{{   $flatorder->remaining_balance }}</td>
                </tr>
                <tr>
                    <th>@lang('price')</th>
                    <td>{{   $flatorder->price }}</td>
                </tr>
                <tr>
                    <th>@lang('payment_type_id')</th>
                    <td>{{   $flatorder->payment_type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('price_currency_id')</th>
                    <td>{{   $flatorder->price_currency_id }}</td>
                </tr>
                <tr>
                    <th>@lang('price_currency_exchange_rate')</th>
                    <td>{{   $flatorder->price_currency_exchange_rate }}</td>
                </tr>
                <tr>
                    <th>@lang('collection_amount')</th>
                    <td>{{   $flatorder->collection_amount }}</td>
                </tr>
                <tr>
                    <th>@lang('collection_type_id')</th>
                    <td>{{   $flatorder->collection_type_id }}</td>
                </tr>
                <tr>
                    <th>@lang('collection_currency_id')</th>
                    <td>{{   $flatorder->collection_currency_id }}</td>
                </tr>
                <tr>
                    <th>@lang('collection_currency_exchange_rate')</th>
                    <td>{{   $flatorder->collection_currency_exchange_rate }}</td>
                </tr>
                <tr>
                    <th>@lang('comment_id')</th>
                    <td>{{   $flatorder->comment_id }}</td>
                </tr>
                <tr>
                    <th>@lang('important_comment_text')</th>
                    <td>{{   $flatorder->important_comment_text }}</td>
                </tr>
                <tr>
                    <th>@lang('comments_count')</th>
                    <td>{{   $flatorder->comments_count }}</td>
                </tr>
                <tr>
                    <th>@lang('allow_receiver_contact')</th>
                    <td>{{   $flatorder->allow_receiver_contact }}</td>
                </tr>
                <tr>
                    <th>@lang('send_receiver_msg')</th>
                    <td>{{   $flatorder->send_receiver_msg }}</td>
                </tr>
                <tr>
                    <th>@lang('car_needed')</th>
                    <td>{{   $flatorder->car_needed }}</td>
                </tr>
                <tr>
                    <th>@lang('settled_with_wakilni')</th>
                    <td>{{   $flatorder->settled_with_wakilni }}</td>
                </tr>
                <tr>
                    <th>@lang('settled_with_customer')</th>
                    <td>{{   $flatorder->settled_with_customer }}</td>
                </tr>
                <tr>
                    <th>@lang('active')</th>
                    <td>{{   $flatorder->active }}</td>
                </tr>
                <tr>
                    <th>@lang('is_critical')</th>
                    <td>{{   $flatorder->is_critical }}</td>
                </tr>
                <tr>
                    <th>@lang('require_signature')</th>
                    <td>{{   $flatorder->require_signature }}</td>
                </tr>
                <tr>
                    <th>@lang('require_picture')</th>
                    <td>{{   $flatorder->require_picture }}</td>
                </tr>
                <tr>
                    <th>@lang('same_package')</th>
                    <td>{{   $flatorder->same_package }}</td>
                </tr>
                <tr>
                    <th>@lang('piggy_bank_submission_id')</th>
                    <td>{{   $flatorder->piggy_bank_submission_id }}</td>
                </tr>
                <tr>
                    <th>@lang('completed_on')</th>
                    <td>{{   $flatorder->completed_on }}</td>
                </tr>
                <tr>
                    <th>@lang('status_updated_at')</th>
                    <td>{{   $flatorder->status_updated_at }}</td>
                </tr>
                <tr>
                    <th>@lang('become_critical_date')</th>
                    <td>{{   $flatorder->become_critical_date }}</td>
                </tr>
                <tr>
                    <th>@lang('confirmed_at')</th>
                    <td>{{   $flatorder->confirmed_at }}</td>
                </tr>
                <tr>
                    <th>@lang('note')</th>
                    <td>{{   $flatorder->note }}</td>
                </tr>
                <tr>
                    <th>@lang('preferred_sender_date')</th>
                    <td>{{   $flatorder->preferred_sender_date }}</td>
                </tr>
                <tr>
                    <th>@lang('preferred_sender_from_time')</th>
                    <td>{{   $flatorder->preferred_sender_from_time }}</td>
                </tr>
                <tr>
                    <th>@lang('preferred_sender_to_time')</th>
                    <td>{{   $flatorder->preferred_sender_to_time }}</td>
                </tr>
                <tr>
                    <th>@lang('preferred_receiver_date')</th>
                    <td>{{   $flatorder->preferred_receiver_date }}</td>
                </tr>
                <tr>
                    <th>@lang('preferred_receiver_from_time')</th>
                    <td>{{   $flatorder->preferred_receiver_from_time }}</td>
                </tr>
                <tr>
                    <th>@lang('preferred_receiver_to_time')</th>
                    <td>{{   $flatorder->preferred_receiver_to_time }}</td>
                </tr>
                <tr>
                    <th>@lang('senderable_id')</th>
                    <td>{{   $flatorder->senderable_id }}</td>
                </tr>
                <tr>
                    <th>@lang('senderable_type')</th>
                    <td>{{   $flatorder->senderable_type }}</td>
                </tr>
                <tr>
                    <th>@lang('senderable_name')</th>
                    <td>{{   $flatorder->senderable_name }}</td>
                </tr>
                <tr>
                    <th>@lang('senderable_phone_number')</th>
                    <td>{{   $flatorder->senderable_phone_number }}</td>
                </tr>
                <tr>
                    <th>@lang('senderable_secondary_phone_number')</th>
                    <td>{{   $flatorder->senderable_secondary_phone_number }}</td>
                </tr>
                <tr>
                    <th>@lang('receiverable_id')</th>
                    <td>{{   $flatorder->receiverable_id }}</td>
                </tr>
                <tr>
                    <th>@lang('receiverable_type')</th>
                    <td>{{   $flatorder->receiverable_type }}</td>
                </tr>
                <tr>
                    <th>@lang('receiverable_name')</th>
                    <td>{{   $flatorder->receiverable_name }}</td>
                </tr>
                <tr>
                    <th>@lang('receiverable_phone_number')</th>
                    <td>{{   $flatorder->receiverable_phone_number }}</td>
                </tr>
                <tr>
                    <th>@lang('receiverable_secondary_phone_number')</th>
                    <td>{{   $flatorder->receiverable_secondary_phone_number }}</td>
                </tr>
                <tr>
                    <th>@lang('sender_location_id')</th>
                    <td>{{   $flatorder->sender_location_id }}</td>
                </tr>
                <tr>
                    <th>@lang('sender_location_label')</th>
                    <td>{{   $flatorder->sender_location_label }}</td>
                </tr>
                <tr>
                    <th>@lang('sender_area_id')</th>
                    <td>{{   $flatorder->sender_area_id }}</td>
                </tr>
                <tr>
                    <th>@lang('sender_area_label')</th>
                    <td>{{   $flatorder->sender_area_label }}</td>
                </tr>
                <tr>
                    <th>@lang('sender_zone_id')</th>
                    <td>{{   $flatorder->sender_zone_id }}</td>
                </tr>
                <tr>
                    <th>@lang('sender_zone_label')</th>
                    <td>{{   $flatorder->sender_zone_label }}</td>
                </tr>
                <tr>
                    <th>@lang('receiver_location_id')</th>
                    <td>{{   $flatorder->receiver_location_id }}</td>
                </tr>
                <tr>
                    <th>@lang('receiver_location_label')</th>
                    <td>{{   $flatorder->receiver_location_label }}</td>
                </tr>
                <tr>
                    <th>@lang('receiver_area_id')</th>
                    <td>{{   $flatorder->receiver_area_id }}</td>
                </tr>
                <tr>
                    <th>@lang('receiver_area_label')</th>
                    <td>{{   $flatorder->receiver_area_label }}</td>
                </tr>
                <tr>
                    <th>@lang('receiver_zone_id')</th>
                    <td>{{   $flatorder->receiver_zone_id }}</td>
                </tr>
                <tr>
                    <th>@lang('receiver_zone_label')</th>
                    <td>{{   $flatorder->receiver_zone_label }}</td>
                </tr>
                <tr>
                    <th>@lang('task_scheduled_date')</th>
                    <td>{{   $flatorder->task_scheduled_date }}</td>
                </tr>
                <tr>
                    <th>@lang('task_scheduled_from_time')</th>
                    <td>{{   $flatorder->task_scheduled_from_time }}</td>
                </tr>
                <tr>
                    <th>@lang('task_scheduled_to_time')</th>
                    <td>{{   $flatorder->task_scheduled_to_time }}</td>
                </tr>
                <tr>
                    <th>@lang('task_driver_id')</th>
                    <td>{{   $flatorder->task_driver_id }}</td>
                </tr>
                <tr>
                    <th>@lang('task_driver_user_id')</th>
                    <td>{{   $flatorder->task_driver_user_id }}</td>
                </tr>
                <tr>
                    <th>@lang('task_driver_contact_id')</th>
                    <td>{{   $flatorder->task_driver_contact_id }}</td>
                </tr>
                <tr>
                    <th>@lang('task_driver_user_name')</th>
                    <td>{{   $flatorder->task_driver_user_name }}</td>
                </tr>
                <tr>
                    <th>@lang('task_driver_user_phone_number')</th>
                    <td>{{   $flatorder->task_driver_user_phone_number }}</td>
                </tr>
                <tr>
                    <th>@lang('task_driver_user_is_active')</th>
                    <td>{{   $flatorder->task_driver_user_is_active }}</td>
                </tr>
                <tr>
                    <th>@lang('last_task_driver_id')</th>
                    <td>{{   $flatorder->last_task_driver_id }}</td>
                </tr>
                <tr>
                    <th>@lang('last_task_driver_user_id')</th>
                    <td>{{   $flatorder->last_task_driver_user_id }}</td>
                </tr>
                <tr>
                    <th>@lang('last_task_driver_contact_id')</th>
                    <td>{{   $flatorder->last_task_driver_contact_id }}</td>
                </tr>
                <tr>
                    <th>@lang('last_task_driver_user_name')</th>
                    <td>{{   $flatorder->last_task_driver_user_name }}</td>
                </tr>
                <tr>
                    <th>@lang('last_task_driver_user_phone_number')</th>
                    <td>{{   $flatorder->last_task_driver_user_phone_number }}</td>
                </tr>
                <tr>
                    <th>@lang('last_task_driver_user_is_active')</th>
                    <td>{{   $flatorder->last_task_driver_user_is_active }}</td>
                </tr>
                <tr>
                    <th>@lang('packages')</th>
                    <td>{{   $flatorder->packages }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_id')</th>
                    <td>{{   $flatorder->customer_id }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_name')</th>
                    <td>{{   $flatorder->customer_name }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_golden_rule')</th>
                    <td>{{   $flatorder->customer_golden_rule }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_is_active')</th>
                    <td>{{   $flatorder->customer_is_active }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_account_manager_id')</th>
                    <td>{{   $flatorder->customer_account_manager_id }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_industry_id')</th>
                    <td>{{   $flatorder->customer_industry_id }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_user_id')</th>
                    <td>{{   $flatorder->customer_user_id }}</td>
                </tr>
                <tr>
                    <th>@lang('customer_user_name')</th>
                    <td>{{   $flatorder->customer_user_name }}</td>
                </tr>
                <tr>
                    <th>@lang('piggy_bank_id')</th>
                    <td>{{   $flatorder->piggy_bank_id }}</td>
                </tr>
                <tr>
                    <th>@lang('store_id')</th>
                    <td>{{   $flatorder->store_id }}</td>
                </tr>
                <tr>
                    <th>@lang('app_token_id')</th>
                    <td>{{   $flatorder->app_token_id }}</td>
                </tr>
                <tr>
                    <th>@lang('app_ref_id')</th>
                    <td>{{   $flatorder->app_ref_id }}</td>
                </tr>
                <tr>
                    <th>@lang('fulfillment_id')</th>
                    <td>{{   $flatorder->fulfillment_id }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Flatorder Created'):</strong> @displayDate($flatorder->created_at) ({{   $flatorder->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($flatorder->updated_at) ({{   $flatorder->updated_at->diffForHumans() }})

                @if($flatorder->trashed())
                    <strong>@lang('Flatorder Deleted'):</strong> @displayDate($flatorder->deleted_at) ({{   $flatorder->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection