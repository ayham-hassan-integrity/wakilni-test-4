<?php

namespace App\Http\Livewire;

use App\Domains\Task\Models\Task;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class TaskTable.
 */
class TaskTable extends TableComponent
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
        $query = Task::query();

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
            Column::make(__('sequence'), 'sequence')
,
            Column::make(__('overall_sequence'), 'overall_sequence')
,
            Column::make(__('deliver_amount'), 'deliver_amount')
,
            Column::make(__('receive_amount'), 'receive_amount')
,
            Column::make(__('deliver_package'), 'deliver_package')
,
            Column::make(__('receive_package'), 'receive_package')
,
            Column::make(__('note'), 'note')
,
            Column::make(__('fail_reason'), 'fail_reason')
,
            Column::make(__('collection_note'), 'collection_note')
,
            Column::make(__('preferred_date'), 'preferred_date')
,
            Column::make(__('preferred_from_time'), 'preferred_from_time')
,
            Column::make(__('preferred_to_time'), 'preferred_to_time')
,
            Column::make(__('collection_date'), 'collection_date')
,
            Column::make(__('require_signature'), 'require_signature')
,
            Column::make(__('status'), 'status')
,
            Column::make(__('submitted'), 'submitted')
,
            Column::make(__('secured'), 'secured')
,
            Column::make(__('receiverable_id'), 'receiverable_id')
,
            Column::make(__('receiverable_type'), 'receiverable_type')
,
            Column::make(__('order_id'), 'order_id')
,
            Column::make(__('location_id'), 'location_id')
,
            Column::make(__('driver_id'), 'driver_id')
,
            Column::make(__('type_id'), 'type_id')
,
            Column::make(__('customer_id'), 'customer_id')
,
            Column::make(__('store_id'), 'store_id')
,
            Column::make(__('require_picture'), 'require_picture')
,
            Column::make(__('picture_id'), 'picture_id')
,
            Column::make(__('signature_id'), 'signature_id')
,
            Column::make(__('driver_submission_id'), 'driver_submission_id')
,
            Column::make(__('piggy_bank_id'), 'piggy_bank_id')
,
            Column::make(__('vehicle_id'), 'vehicle_id')
,
            Column::make(__('receive_price'), 'receive_price')
,
            Column::make(__('deliver_amount_currency_rate'), 'deliver_amount_currency_rate')
,
            Column::make(__('receive_amount_currency_rate'), 'receive_amount_currency_rate')
,
            Column::make(__('amount_currency'), 'amount_currency')
,
            Column::make(__('price_currency'), 'price_currency')
,

            Column::make(__('Actions'))
                ->format(function (Task $model) {
                    return view('backend.task.includes.actions',  ['task' => $model]);
                })
        ];
    }
}