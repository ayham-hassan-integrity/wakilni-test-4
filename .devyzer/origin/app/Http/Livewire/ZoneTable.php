<?php

namespace App\Http\Livewire;

use App\Domains\Zone\Models\Zone;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class ZoneTable.
 */
class ZoneTable extends TableComponent
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
        $query = Zone::query();

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
            Column::make(__('area'), 'area')
,
            Column::make(__('store_id'), 'store_id')
,
            Column::make(__('description'), 'description')
,

            Column::make(__('Actions'))
                ->format(function (Zone $model) {
                    return view('backend.zone.includes.actions',  ['zone' => $model]);
                })
        ];
    }
}