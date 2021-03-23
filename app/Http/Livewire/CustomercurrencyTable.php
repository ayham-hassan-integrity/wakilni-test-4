<?php

namespace App\Http\Livewire;

use App\Domains\CustomerCurrency\Models\Customercurrency;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class CustomercurrencyTable.
 */
class CustomercurrencyTable extends TableComponent
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
        $query = Customercurrency::query();

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
            Column::make(__('customer_id'), 'customer_id')
,
            Column::make(__('currency_id'), 'currency_id')
,
            Column::make(__('exchange_rate'), 'exchange_rate')
,

            Column::make(__('Actions'))
                ->format(function (Customercurrency $model) {
                    return view('backend.customer-currency.includes.actions',  ['customercurrency' => $model]);
                })
        ];
    }
}