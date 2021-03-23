<?php

namespace App\Http\Livewire;

use App\Domains\CustomerPrice\Models\Customerprice;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class CustomerpriceTable.
 */
class CustomerpriceTable extends TableComponent
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
        $query = Customerprice::query();

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
            Column::make(__('minimum_count'), 'minimum_count')
,
            Column::make(__('maximum_count'), 'maximum_count')
,
            Column::make(__('price'), 'price')
,
            Column::make(__('customer_id'), 'customer_id')
,
            Column::make(__('from_zone_id'), 'from_zone_id')
,
            Column::make(__('to_zone_id'), 'to_zone_id')
,

            Column::make(__('Actions'))
                ->format(function (Customerprice $model) {
                    return view('backend.customer-price.includes.actions',  ['customerprice' => $model]);
                })
        ];
    }
}