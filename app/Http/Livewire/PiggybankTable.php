<?php

namespace App\Http\Livewire;

use App\Domains\PiggyBank\Models\Piggybank;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class PiggybankTable.
 */
class PiggybankTable extends TableComponent
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
        $query = Piggybank::query();

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
            Column::make(__('note'), 'note')
,
            Column::make(__('start_date'), 'start_date')
,
            Column::make(__('end_date'), 'end_date')
,
            Column::make(__('status'), 'status')
,
            Column::make(__('customer_id'), 'customer_id')
,

            Column::make(__('Actions'))
                ->format(function (Piggybank $model) {
                    return view('backend.piggy-bank.includes.actions',  ['piggybank' => $model]);
                })
        ];
    }
}