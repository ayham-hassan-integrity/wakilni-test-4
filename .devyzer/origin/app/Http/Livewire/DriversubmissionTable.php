<?php

namespace App\Http\Livewire;

use App\Domains\DriverSubmission\Models\Driversubmission;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class DriversubmissionTable.
 */
class DriversubmissionTable extends TableComponent
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
        $query = Driversubmission::query();

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
            Column::make(__('goal_amount'), 'goal_amount')
,
            Column::make(__('note'), 'note')
,
            Column::make(__('status'), 'status')
,
            Column::make(__('driver_id'), 'driver_id')
,
            Column::make(__('operator_note'), 'operator_note')
,

            Column::make(__('Actions'))
                ->format(function (Driversubmission $model) {
                    return view('backend.driver-submission.includes.actions',  ['driversubmission' => $model]);
                })
        ];
    }
}