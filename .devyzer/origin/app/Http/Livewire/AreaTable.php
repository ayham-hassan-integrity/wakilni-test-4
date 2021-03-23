<?php

namespace App\Http\Livewire;

use App\Domains\Area\Models\Area;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class AreaTable.
 */
class AreaTable extends TableComponent
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
        $query = Area::query();

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
            Column::make(__('zone_id'), 'zone_id')
,

            Column::make(__('Actions'))
                ->format(function (Area $model) {
                    return view('backend.area.includes.actions',  ['area' => $model]);
                })
        ];
    }
}