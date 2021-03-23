<?php

namespace App\Http\Livewire;

use App\Domains\Order\Models\Order;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class OrderTable.
 */
class OrderTable extends TableComponent
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
        $query = Order::query();

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
            Column::make(__('order_number'), 'order_number')
,
            Column::make(__('rate'), 'rate')
,
            Column::make(__('completed_on'), 'completed_on')
,
            Column::make(__('payment_status'), 'payment_status')
,
            Column::make(__('package_status'), 'package_status')
,
            Column::make(__('status'), 'status')
,
            Column::make(__('status_updated_at'), 'status_updated_at')
,
            Column::make(__('remaining_balance'), 'remaining_balance')
,
            Column::make(__('price'), 'price')
,
            Column::make(__('parent_id'), 'parent_id')
,
            Column::make(__('order_details_id'), 'order_details_id')
,
            Column::make(__('comment_id'), 'comment_id')
,
            Column::make(__('waybill'), 'waybill')
,
            Column::make(__('allow_receiver_contact'), 'allow_receiver_contact')
,
            Column::make(__('send_receiver_msg'), 'send_receiver_msg')
,
            Column::make(__('car_needed'), 'car_needed')
,
            Column::make(__('settled_with_wakilni'), 'settled_with_wakilni')
,
            Column::make(__('settled_with_customer'), 'settled_with_customer')
,
            Column::make(__('piggy_bank_submission_id'), 'piggy_bank_submission_id')
,
            Column::make(__('active'), 'active')
,
            Column::make(__('is_critical'), 'is_critical')
,
            Column::make(__('become_critical_date'), 'become_critical_date')
,
            Column::make(__('confirmed_at'), 'confirmed_at')
,

            Column::make(__('Actions'))
                ->format(function (Order $model) {
                    return view('backend.order.includes.actions',  ['order' => $model]);
                })
        ];
    }
}