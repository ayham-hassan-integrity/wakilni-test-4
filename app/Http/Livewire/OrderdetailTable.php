<?php

namespace App\Http\Livewire;

use App\Domains\OrderDetail\Models\Orderdetail;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class OrderdetailTable.
 */
class OrderdetailTable extends TableComponent
{
    /**
     * @var string
     */
    public $sortField = 'id';

    /**
     * @var string
     */
    public $status;

    /**
     * @param string $status
     */
    public function mount($status = null): void
    {
        $this->status = $status;
    }

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        $query = Orderdetail::query();

        if ($this->status === 'deleted') {
            return $query->onlyTrashed();
        }

        return $query;
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('id'), 'id')
,
            Column::make(__('collection_amount'), 'collection_amount')
,
            Column::make(__('note'), 'note')
,
            Column::make(__('preferred_sender_date'), 'preferred_sender_date')
,
            Column::make(__('preferred_sender_from_time'), 'preferred_sender_from_time')
,
            Column::make(__('preferred_sender_to_time'), 'preferred_sender_to_time')
,
            Column::make(__('preferred_receiver_date'), 'preferred_receiver_date')
,
            Column::make(__('preferred_receiver_from_time'), 'preferred_receiver_from_time')
,
            Column::make(__('preferred_receiver_to_time'), 'preferred_receiver_to_time')
,
            Column::make(__('require_signature'), 'require_signature')
,
            Column::make(__('require_picture'), 'require_picture')
,
            Column::make(__('same_package'), 'same_package')
,
            Column::make(__('senderable_id'), 'senderable_id')
,
            Column::make(__('senderable_type'), 'senderable_type')
,
            Column::make(__('receiverable_id'), 'receiverable_id')
,
            Column::make(__('receiverable_type'), 'receiverable_type')
,
            Column::make(__('payment_type_id'), 'payment_type_id')
,
            Column::make(__('cash_collection_type_id'), 'cash_collection_type_id')
,
            Column::make(__('customer_id'), 'customer_id')
,
            Column::make(__('piggy_bank_id'), 'piggy_bank_id')
,
            Column::make(__('type_id'), 'type_id')
,
            Column::make(__('sender_location_id'), 'sender_location_id')
,
            Column::make(__('receiver_location_id'), 'receiver_location_id')
,
            Column::make(__('collection_currency'), 'collection_currency')
,
            Column::make(__('store_id'), 'store_id')
,
            Column::make(__('app_token_id'), 'app_token_id')
,
            Column::make(__('app_ref_id'), 'app_ref_id')
,
            Column::make(__('fulfillment_id'), 'fulfillment_id')
,

            Column::make(__('Actions'))
                ->format(function (Orderdetail $model) {
                    return view('backend.order-detail.includes.actions',  ['orderdetail' => $model]);
                })
        ];
    }
}