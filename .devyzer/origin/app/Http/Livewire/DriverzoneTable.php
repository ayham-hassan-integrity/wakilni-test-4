<?php

namespace App\Http\Livewire;

use App\Domains\DriverZone\Models\Driverzone;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class DriverzoneTable.
 */
class DriverzoneTable extends TableComponent
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
        $query = Driverzone::query();

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
            Column::make(__('zone_id'), 'zone_id')
,
            Column::make(__('driver_id'), 'driver_id')
,

            Column::make(__('Actions'))
                ->format(function (Driverzone $model) {
                    return view('backend.driver-zone.includes.actions',  ['driverzone' => $model]);
                })
        ];
    }
}