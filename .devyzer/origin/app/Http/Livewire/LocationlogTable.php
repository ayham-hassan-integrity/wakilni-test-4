<?php

namespace App\Http\Livewire;

use App\Domains\LocationLog\Models\Locationlog;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class LocationlogTable.
 */
class LocationlogTable extends TableComponent
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
        $query = Locationlog::query();

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
            Column::make(__('data'), 'data')
,
            Column::make(__('location_id'), 'location_id')
,
            Column::make(__('driver_id'), 'driver_id')
,
            Column::make(__('type_id'), 'type_id')
,

            Column::make(__('Actions'))
                ->format(function (Locationlog $model) {
                    return view('backend.location-log.includes.actions',  ['locationlog' => $model]);
                })
        ];
    }
}