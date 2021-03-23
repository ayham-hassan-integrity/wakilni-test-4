<?php

namespace App\Http\Livewire;

use App\Domains\DriverVehicle\Models\Drivervehicle;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class DrivervehicleTable.
 */
class DrivervehicleTable extends TableComponent
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
        $query = Drivervehicle::query();

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
            Column::make(__('vehicle_id'), 'vehicle_id')
,
            Column::make(__('driver_id'), 'driver_id')
,

            Column::make(__('Actions'))
                ->format(function (Drivervehicle $model) {
                    return view('backend.driver-vehicle.includes.actions',  ['drivervehicle' => $model]);
                })
        ];
    }
}