<?php

namespace App\Http\Livewire;

use App\Domains\CustomerOperator\Models\Customeroperator;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class CustomeroperatorTable.
 */
class CustomeroperatorTable extends TableComponent
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
        $query = Customeroperator::query();

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
            Column::make(__('operator_id'), 'operator_id')
,

            Column::make(__('Actions'))
                ->format(function (Customeroperator $model) {
                    return view('backend.customer-operator.includes.actions',  ['customeroperator' => $model]);
                })
        ];
    }
}