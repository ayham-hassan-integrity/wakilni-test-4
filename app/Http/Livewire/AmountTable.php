<?php

namespace App\Http\Livewire;

use App\Domains\Amount\Models\Amount;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class AmountTable.
 */
class AmountTable extends TableComponent
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
        $query = Amount::query();

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
            Column::make(__('piggy_bank_id'), 'piggy_bank_id')
,
            Column::make(__('type_id'), 'type_id')
,
            Column::make(__('currency_id'), 'currency_id')
,

            Column::make(__('Actions'))
                ->format(function (Amount $model) {
                    return view('backend.amount.includes.actions',  ['amount' => $model]);
                })
        ];
    }
}