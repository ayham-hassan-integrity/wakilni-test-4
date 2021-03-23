<?php

namespace App\Http\Livewire;

use App\Domains\Stock\Models\Stock;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class StockTable.
 */
class StockTable extends TableComponent
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
        $query = Stock::query();

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
            Column::make(__('label'), 'label')
,
            Column::make(__('amount'), 'amount')
,
            Column::make(__('type_id'), 'type_id')
,
            Column::make(__('size_id'), 'size_id')
,

            Column::make(__('Actions'))
                ->format(function (Stock $model) {
                    return view('backend.stock.includes.actions',  ['stock' => $model]);
                })
        ];
    }
}