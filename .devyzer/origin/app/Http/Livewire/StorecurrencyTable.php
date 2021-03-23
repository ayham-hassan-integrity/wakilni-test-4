<?php

namespace App\Http\Livewire;

use App\Domains\StoreCurrency\Models\Storecurrency;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class StorecurrencyTable.
 */
class StorecurrencyTable extends TableComponent
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
        $query = Storecurrency::query();

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
            Column::make(__('store_id'), 'store_id')
,
            Column::make(__('currency_id'), 'currency_id')
,

            Column::make(__('Actions'))
                ->format(function (Storecurrency $model) {
                    return view('backend.store-currency.includes.actions',  ['storecurrency' => $model]);
                })
        ];
    }
}