<?php

namespace App\Http\Livewire;

use App\Domains\Office\Models\Office;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class OfficeTable.
 */
class OfficeTable extends TableComponent
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
        $query = Office::query();

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
            Column::make(__('name'), 'name')
,
            Column::make(__('area'), 'area')
,
            Column::make(__('store_id'), 'store_id')
,
            Column::make(__('phone_number'), 'phone_number')
,

            Column::make(__('Actions'))
                ->format(function (Office $model) {
                    return view('backend.office.includes.actions',  ['office' => $model]);
                })
        ];
    }
}