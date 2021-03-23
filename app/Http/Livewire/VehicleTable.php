<?php

namespace App\Http\Livewire;

use App\Domains\Vehicle\Models\Vehicle;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class VehicleTable.
 */
class VehicleTable extends TableComponent
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
        $query = Vehicle::query();

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
            Column::make(__('count'), 'count')
,
            Column::make(__('remaining'), 'remaining')
,
            Column::make(__('maintenance'), 'maintenance')
,
            Column::make(__('type_id'), 'type_id')
,

            Column::make(__('Actions'))
                ->format(function (Vehicle $model) {
                    return view('backend.vehicle.includes.actions',  ['vehicle' => $model]);
                })
        ];
    }
}