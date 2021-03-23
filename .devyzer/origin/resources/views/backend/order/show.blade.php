@extends('backend.layouts.app')

@section('title', __('View Order'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Order')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.order.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $order->id }}</td>
                </tr>
                <tr>
                    <th>@lang('order_number')</th>
                    <td>{{   $order->order_number }}</td>
                </tr>
                <tr>
                    <th>@lang('rate')</th>
                    <td>{{   $order->rate }}</td>
                </tr>
                <tr>
                    <th>@lang('completed_on')</th>
                    <td>{{   $order->completed_on }}</td>
                </tr>
                <tr>
                    <th>@lang('payment_status')</th>
                    <td>{{   $order->payment_status }}</td>
                </tr>
                <tr>
                    <th>@lang('package_status')</th>
                    <td>{{   $order->package_status }}</td>
                </tr>
                <tr>
                    <th>@lang('status')</th>
                    <td>{{   $order->status }}</td>
                </tr>
                <tr>
                    <th>@lang('status_updated_at')</th>
                    <td>{{   $order->status_updated_at }}</td>
                </tr>
                <tr>
                    <th>@lang('remaining_balance')</th>
                    <td>{{   $order->remaining_balance }}</td>
                </tr>
                <tr>
                    <th>@lang('price')</th>
                    <td>{{   $order->price }}</td>
                </tr>
                <tr>
                    <th>@lang('parent_id')</th>
                    <td>{{   $order->parent_id }}</td>
                </tr>
                <tr>
                    <th>@lang('order_details_id')</th>
                    <td>{{   $order->order_details_id }}</td>
                </tr>
                <tr>
                    <th>@lang('comment_id')</th>
                    <td>{{   $order->comment_id }}</td>
                </tr>
                <tr>
                    <th>@lang('waybill')</th>
                    <td>{{   $order->waybill }}</td>
                </tr>
                <tr>
                    <th>@lang('allow_receiver_contact')</th>
                    <td>{{   $order->allow_receiver_contact }}</td>
                </tr>
                <tr>
                    <th>@lang('send_receiver_msg')</th>
                    <td>{{   $order->send_receiver_msg }}</td>
                </tr>
                <tr>
                    <th>@lang('car_needed')</th>
                    <td>{{   $order->car_needed }}</td>
                </tr>
                <tr>
                    <th>@lang('settled_with_wakilni')</th>
                    <td>{{   $order->settled_with_wakilni }}</td>
                </tr>
                <tr>
                    <th>@lang('settled_with_customer')</th>
                    <td>{{   $order->settled_with_customer }}</td>
                </tr>
                <tr>
                    <th>@lang('piggy_bank_submission_id')</th>
                    <td>{{   $order->piggy_bank_submission_id }}</td>
                </tr>
                <tr>
                    <th>@lang('active')</th>
                    <td>{{   $order->active }}</td>
                </tr>
                <tr>
                    <th>@lang('is_critical')</th>
                    <td>{{   $order->is_critical }}</td>
                </tr>
                <tr>
                    <th>@lang('become_critical_date')</th>
                    <td>{{   $order->become_critical_date }}</td>
                </tr>
                <tr>
                    <th>@lang('confirmed_at')</th>
                    <td>{{   $order->confirmed_at }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Order Created'):</strong> @displayDate($order->created_at) ({{   $order->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($order->updated_at) ({{   $order->updated_at->diffForHumans() }})

                @if($order->trashed())
                    <strong>@lang('Order Deleted'):</strong> @displayDate($order->deleted_at) ({{   $order->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection