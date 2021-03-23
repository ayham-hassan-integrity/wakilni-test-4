<?php

namespace App\Http\Livewire;

use App\Domains\Currency\Models\Currency;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class CurrencyTable.
 */
class CurrencyTable extends TableComponent
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
        $query = Currency::query();

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
            Column::make(__('title'), 'title')
,
            Column::make(__('symbol_left'), 'symbol_left')
,
            Column::make(__('symbol_right'), 'symbol_right')
,
            Column::make(__('code'), 'code')
,
            Column::make(__('exchange_rate'), 'exchange_rate')
,

            Column::make(__('Actions'))
                ->format(function (Currency $model) {
                    return view('backend.currency.includes.actions',  ['currency' => $model]);
                })
        ];
    }
}