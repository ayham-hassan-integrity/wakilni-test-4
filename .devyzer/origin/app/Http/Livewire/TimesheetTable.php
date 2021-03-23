<?php

namespace App\Http\Livewire;

use App\Domains\TimeSheet\Models\Timesheet;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class TimesheetTable.
 */
class TimesheetTable extends TableComponent
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
        $query = Timesheet::query();

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
            Column::make(__('from'), 'from')
,
            Column::make(__('to'), 'to')
,
            Column::make(__('note'), 'note')
,
            Column::make(__('user_id'), 'user_id')
,
            Column::make(__('status'), 'status')
,

            Column::make(__('Actions'))
                ->format(function (Timesheet $model) {
                    return view('backend.time-sheet.includes.actions',  ['timesheet' => $model]);
                })
        ];
    }
}