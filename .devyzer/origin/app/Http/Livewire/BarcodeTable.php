<?php

namespace App\Http\Livewire;

use App\Domains\Barcode\Models\Barcode;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class BarcodeTable.
 */
class BarcodeTable extends TableComponent
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
        $query = Barcode::query();

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
            Column::make(__('status'), 'status')
,
            Column::make(__('barcode_order_number'), 'barcode_order_number')
,
            Column::make(__('pickup_order_id'), 'pickup_order_id')
,
            Column::make(__('pickup_task_id'), 'pickup_task_id')
,
            Column::make(__('pickup_driver_id'), 'pickup_driver_id')
,
            Column::make(__('delivery_order_id'), 'delivery_order_id')
,
            Column::make(__('customer_id'), 'customer_id')
,
            Column::make(__('scanned_at'), 'scanned_at')
,

            Column::make(__('Actions'))
                ->format(function (Barcode $model) {
                    return view('backend.barcode.includes.actions',  ['barcode' => $model]);
                })
        ];
    }
}