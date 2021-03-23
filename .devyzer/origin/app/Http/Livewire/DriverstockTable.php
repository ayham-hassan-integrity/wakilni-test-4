<?php

namespace App\Http\Livewire;

use App\Domains\DriverStock\Models\Driverstock;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class DriverstockTable.
 */
class DriverstockTable extends TableComponent
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
        $query = Driverstock::query();

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
            Column::make(__('amount'), 'amount')
,
            Column::make(__('stock_id'), 'stock_id')
,
            Column::make(__('driver_id'), 'driver_id')
,

            Column::make(__('Actions'))
                ->format(function (Driverstock $model) {
                    return view('backend.driver-stock.includes.actions',  ['driverstock' => $model]);
                })
        ];
    }
}